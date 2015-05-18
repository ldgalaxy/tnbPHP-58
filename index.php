<?php

$time = time();

$actual_time = date('D M Y @ H:i:s' , $time);//date(format, timestamp)

echo 'The current date/time is ' . $actual_time;

?>
