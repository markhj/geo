The ````BoundingBox```` object is used to take 2+ coordinates to determine the outer edges of it.

# Initializing

The constructor takes any number of ````Coordinate````s, but there must be at least 2 in order to avoid the ````NotEnoughCoordinatesException```` thrown.

```php
use Markhj\Geo\BoundingBox;

$bbox = new BoundingBox(
	new Coordinate(68, -18),
	new Coordinate(-12, 16),
	new Coordinate(10, 15),
	new Coordinate(-15, 12)
);
```

# Getters

When the bounding box is initiated you can retrieve coordinate sets indicating the edges. This is normally done by looking at North/East and South/West. However, methods are available to do it in the manner you prefer.

```php
public function northEast(): Coordinate;
public function northWest(): Coordinate;
public function southEast(): Coordinate;
public function southWest(): Coordinate;
```

# Example

```php
$bbox = new BoundingBox(
	new Coordinate(68, -18),
	new Coordinate(-12, 16),
	new Coordinate(10, 15),
	new Coordinate(-15, 12)
);

$bbox->northEast(); // [68, 16]
$bbox->southWest(); // [-15, -18]
```