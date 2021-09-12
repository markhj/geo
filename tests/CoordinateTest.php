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
	}
}
