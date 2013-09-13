<?php namespace wvanbreukelen\PackageDevelop;

use Illuminate\Support\ServiceProvider;

class PackageDevelopServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('wvanbreukelen/package-develop');
		// include __DIR__.'/../../routes.php';
		$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		$this->PackageDevelop();

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

	public function PackageDevelop()
	{
		return new \wvanbreukelen\PackageDevelop\PackageDevelop();
	}

}