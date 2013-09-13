<?php

use Illuminate\Console\Command;

class PackageDevelopCreateCommand extends Command
{
	protected $name = 'pd:create';

	protected $description = "Create a prebuilded class";

	public function fire()
	{
		$this->line('Welcome to the packageDevelopCreate command!');
	}
}