<?php

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$redis->subscribe(['chan-1', 'chan-2'], 'subscribe');

function subscribe($redis, $chan, $msg)
{
	echo "$msg on $chan", PHP_EOL;
	// write on a file 
	$myFile = fopen("redis_sub.txt", "a") or die("Unable to open file!");
	$txt = "$msg on $chan\n";
	fwrite($myFile, $txt);
	fclose($myFile);
};
