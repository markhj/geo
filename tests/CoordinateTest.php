<?php

namespace Markhj\Tests;

use Markhj\Geo\Coordinate;
use PHPUnit\Framework\TestCase;

class CoordinateTest extends TestCase
{
	/**
	 * @test
	 * @return void
	 */
	public function test(): void
	{
		$coordinate = new Coordinate(55.6, 12.5);

		$this->assertEquals(
			55.6,
			$coordinate->lat()
		);

		$this->assertEquals(
			12.5,
			$coordinate->lng()
		);

		$this->assertNull($coordinate->elevation());
	}

	/**
	 * @test
	 * @return void
	 */
	public function elevation(): void
	{
		$coordinate = new Coordinate(55.6, 12.5, 228.2);

		$this->assertEquals(
			55.6,
			$coordinate->lat()
		);

		$this->assertEquals(
			12.5,
			$coordinate->lng()
		);

		$this->assertEquals(
			228.2,
			$coordinate->elevation()
		);
	}
}
