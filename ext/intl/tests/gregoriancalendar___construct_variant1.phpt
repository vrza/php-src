--TEST--
IntlGregorianCalendar::__construct(): argument variants
--EXTENSIONS--
intl
--FILE--
<?php
ini_set("intl.error_level", E_WARNING);

date_default_timezone_set('Europe/Amsterdam');

$intlcal = intlgregcal_create_instance(2012, 1, 29, 16, 0, 0);
var_dump($intlcal->getTimeZone()->getId());
var_dump($intlcal->getTime(), (float)strtotime('2012-02-29 16:00:00') * 1000);

$intlcal = new IntlGregorianCalendar(2012, 1, 29, 16, 7, 8);
var_dump($intlcal->getTime(), (float)strtotime('2012-02-29 16:07:08') * 1000);

var_dump($intlcal->getType());
?>
--EXPECTF--
Deprecated: Function intlgregcal_create_instance() is deprecated since 8.4, use IntlGregorianCalendar::__construct(), IntlGregorianCalendar::createFromDate(), or IntlGregorianCalendar::createFromDateTime() instead in %s on line %d
string(16) "Europe/Amsterdam"
float(1330527600000)
float(1330527600000)

Deprecated: Calling IntlGregorianCalendar::__construct() with more than 2 arguments is deprecated, use either IntlGregorianCalendar::createFromDate() or IntlGregorianCalendar::createFromDateTime() instead in %s on line %d
float(1330528028000)
float(1330528028000)
string(9) "gregorian"
