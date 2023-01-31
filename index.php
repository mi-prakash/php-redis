<?php

$redis = new Redis();
//Connecting to Redis
$redis->connect('127.0.0.1', 6379);

if ($redis->ping())
{
	echo "PONG\n";
}

$key = "Key_Name";
$redis->set($key, 'Key Value');
echo $redis->get($key);
