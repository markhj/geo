<?php

namespace Markhj\Geo;

class Coordinate
{
	/**
	 * Latitude
	 * 
	 * @var float
	 */
	protected $lat;

	/**
	 * Longitude
	 * 
	 * @var float
	 */
	protected $lng;

	/**
	 * Constructor
	 * 
	 * @param float|null $lat
	 * @param float|null $lng
	 */
	public function __construct(
		?float $lat = null,
		?float $lng = null
	)
	{
		if (!is_null($lat) && !is_null($lng)) {
			$this->set($lat, $lng);
		}
	}

	/**
	 * Set lat/lng coordinate
	 * 
	 * @param float $lat
	 * @param float $lng
	 * @return Coordinate
	 */
	public function set(
		float $lat,
		float $lng
	): Coordinate
	{
		$this->lat = $lat;
		$this->lng = $lng;

		return $this;
	}

	/**
	 * Get latitude
	 * 
	 * @return float
	 */
	public function lat(): float
	{
		return $this->lat;
	}

	/**
	 * Get longitude
	 * 
	 * @return float
	 */
	public function lng(): float
	{
		return $this->lng;
	}
}
