<?php

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$redis->publish('chan-1', 'hello, Channel 1!'); // send message to channel 1
$redis->publish('chan-2', 'hello, Channel 2!'); // send message to channel 2
