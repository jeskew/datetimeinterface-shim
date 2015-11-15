[![Build Status](https://travis-ci.org/jeskew/datetimeinterface-shim.svg?branch=master)](https://travis-ci.org/jeskew/datetimeinterface-shim)
[![GitHub license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://github.com/jeskew/datetimeinterface-shim)
[![Packagist](https://img.shields.io/packagist/v/jeskew/datetimeinterface-shim.svg)](https://packagist.org/packages/jeskew/datetimeinterface-shim)

Stuck on PHP 5.3 or 5.4 but want to typehint against `\DateTimeInterface`?
Install this package and `use` the included DateTime class:
```php
<?php

use DateTimeCompat\DateTime;

$now = new DateTime();
$fromFormat = DateTime::fromFormat('U', (string) time());
```

