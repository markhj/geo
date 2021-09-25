<?php

namespace Markhj\Geo;

class Coordinate
{
	/**
	 * Latitude
	 * 
	 * @var null|float
	 */
	protected $lat;

	/**
	 * Longitude
	 * 
	 * @var null|float
	 */
	protected $lng;

	/**
	 * Elevation
	 * 
	 * @var null|float
	 */
	protected $elevation;

	/**
	 * Constructor
	 * 
	 * @param float|null $lat
	 * @param float|null $lng
	 */
	public function __construct(
		?float $lat = null,
		?float $lng = null,
		?float $elevation = null
	)
	{
		if (!is_null($lat) && !is_null($lng)) {
			$this->set($lat, $lng, $elevation);
		}
	}

	/**
	 * Set lat/lng coordinate
	 * 
	 * @param float $lat
	 * @param float $lng
	 * @param null|float $elevation
	 * @return Coordinate
	 */
	public function set(
		float $lat,
		float $lng,
		?float $elevation = null
	): Coordinate
	{
		$this->lat = $lat;
		$this->lng = $lng;
		$this->elevation = $elevation;

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

	/**
	 * Get elevation
	 * 
	 * @return null|float
	 */
	public function elevation(): ?float
	{
		return $this->elevation;
	}
}
