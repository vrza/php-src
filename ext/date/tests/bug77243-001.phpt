--TEST--
Bug #77243 (Weekdays are calculated incorrectly for negative years)
--SKIPIF--
<?php if (PHP_INT_SIZE != 8) die("skip 64-bit only"); ?>
--FILE--
<?php
date_default_timezone_set('UTC');

$time=-62167046400; // 0000-01-03 0-01-1

for ($i = -10; $i < 10; $i++ )
{
	echo date('Y-m-d o-W-N', $time + ($i * 86400)), "\n";
}
?>
--EXPECT--
-0001-12-24 -1-51-5
-0001-12-25 -1-51-6
-0001-12-26 -1-51-7
-0001-12-27 -1-52-1
-0001-12-28 -1-52-2
-0001-12-29 -1-52-3
-0001-12-30 -1-52-4
-0001-12-31 -1-52-5
0000-01-01 -1-52-6
0000-01-02 -1-52-7
0000-01-03 0-01-1
0000-01-04 0-01-2
0000-01-05 0-01-3
0000-01-06 0-01-4
0000-01-07 0-01-5
0000-01-08 0-01-6
0000-01-09 0-01-7
0000-01-10 0-02-1
0000-01-11 0-02-2
0000-01-12 0-02-3
