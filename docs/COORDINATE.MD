The ````Coordinate```` object is a basic point-type object represented by latitude (lat) and longitude (lng).

# Initializing

The constructor takes any number of ````Coordinate````s, but there must be at least 2 in order to avoid the ````NotEnoughCoordinatesException```` thrown.

```php
use Markhj\Geo\Coordinate;

$coordinate = new Coordinate(55, 12);
```

You can also initialize a coordinate with an elevation (in the third argument), given as meters above sea level.
```php
$coordinate = new Coordinate(55, 12, 33);
```

The elevation property is optional (i.e. nullable).

# Methods
## Getters
```php
public function toArray(): array;
public function lat(): float;
public function lng(): float;
public function elevation(): ?float;
```

## Setters
```php
public function set(
	float $lat,
	float $lng,
	?float $elevation = null
): Coordinate;
```