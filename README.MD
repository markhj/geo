This library offers various geographical tools for PHP 8.0 and up.

# Install
To add this package using Composer 2:
````
composer require markhj/geo
````

# Getting started

Please see the detailed documentations in the ````docs```` directory.

## Quick start
````php
use Markhj\Geo\Coordinate;

$coordinate = new Coordinate(55.675, 12.57);

$coordinate->lat(); // 55.675
$coordinate->lng(); // 12.57
```
