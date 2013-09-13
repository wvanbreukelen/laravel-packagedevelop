<?php namespace wvanbreukelen\PackageDevelop;
/**
 * Package that allow Laravel users to create their own package without creating a new workbench
 */

class PackageDevelop
{

	protected static $packages = array();

	/**
	 * Register the package in our package
	 *
	 * @var package
	 */


	public static function register($package)
	{
		self::$packages[] = $package;
	}

	/**
	 * Return a new instance of the package
	 *
	 * @var package 
	 */

	public static function make($package)
	{
		if (self::packageExists($package) && in_array($package, $this->packages))
		{
			return new $package;
		}

		throw new Exception("PackageDevelop: Package " . $package . " does not exists!");
		return false;
	}

	/**
	 * Check if a package exists in our packages array
	 *
	 * @var package
	 */

	protected static function packageExists($package)
	{
		if (class_exists($package)) 
		{
			return true;
		}
		return false;
	}
}