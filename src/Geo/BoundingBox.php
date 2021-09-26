<?php

namespace Markhj\Geo;

use Markhj\Geo\Exceptions\NotEnoughCoordinatesException;
use Markhj\Geo\Coordinate;

class BoundingBox
{
	protected array $coordinates = [];
	protected float $n;
	protected float $e;
	protected float $s;
	protected float $w;

	public function __construct(
		Coordinate ...$coordinates
	)
	{
		$this->coordinates = $coordinates;

		if (count($this->coordinates) < 2) {
			throw new NotEnoughCoordinatesException;
		}

		$this->parseNESW();
	}

	protected function parseNESW(): void
	{
		$this->n = $this->coordinates[0]->lat();
		$this->s = $this->coordinates[0]->lat();
		$this->e = $this->coordinates[0]->lng();
		$this->w = $this->coordinates[0]->lng();

		foreach ($this->coordinates as $coordinate) {
			$lat = $coordinate->lat();
			$lng = $coordinate->lng();

			if ($lat > $this->n) {
				$this->n = $lat;
			}

			if ($lat < $this->s) {
				$this->s = $lat;
			}

			if ($lng > $this->e) {
				$this->e = $lng;
			}

			if ($lng < $this->w) {
				$this->w = $lng;
			}
		}
	}

	public function northEast(): Coordinate
	{
		return new Coordinate($this->n, $this->e);
	}

	public function northWest(): Coordinate
	{
		return new Coordinate($this->n, $this->w);
	}

	public function southEast(): Coordinate
	{
		return new Coordinate($this->s, $this->e);
	}

	public function southWest(): Coordinate
	{
		return new Coordinate($this->s, $this->w);
	}
}
