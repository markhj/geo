<?php

namespace Markhj\Tests;

use Markhj\Geo\Coordinate;
use Markhj\Geo\BoundingBox;
use PHPUnit\Framework\TestCase;

class BoundingBoxTest extends TestCase
{
	/**
	 * @test
	 * @return void
	 */
	public function outerBounds(): void
	{
		$bbox = new BoundingBox(
			new Coordinate(68, -18),
			new Coordinate(-12, 16)
		);

		$this->assertEquals(
			[68, 16],
			$bbox->northEast()->toArray()
		);

		$this->assertEquals(
			[68, -18],
			$bbox->northWest()->toArray()
		);

		$this->assertEquals(
			[-12, 16],
			$bbox->southEast()->toArray()
		);

		$this->assertEquals(
			[-12, -18],
			$bbox->southWest()->toArray()
		);
	}

	/**
	 * @test
	 * @return void
	 */
	public function moreCoordinates(): void
	{
		$bbox = new BoundingBox(
			new Coordinate(68, -18),
			new Coordinate(-12, 16),
			new Coordinate(10, 15),
			new Coordinate(-15, 12)
		);

		$this->assertEquals(
			[68, 16],
			$bbox->northEast()->toArray()
		);

		$this->assertEquals(
			[-15, -18],
			$bbox->southWest()->toArray()
		);
	}
}
