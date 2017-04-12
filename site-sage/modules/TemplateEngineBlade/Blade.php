<?php
namespace TemplateEngineBlade;

use ProcessWire\FileCompiler;
use ProcessWire\ProcessWire;
use function ProcessWire\wire;

class Blade extends \Jenssegers\Blade\Blade {

	public function __construct($viewPaths, $cachePath, ContainerInterface $container = null)
	{
	    parent::__construct($viewPaths, $cachePath, $container);

		// The Compiler engine requires an instance of the CompilerInterface, which in
		// this case will be the Blade compiler, so we'll first create the compiler
		// instance to pass into the engine so it can compile the views properly.
		$this->container->singleton('blade.compiler', function () {
			return new \TemplateEngineBlade\BladeCompiler(
				$this->container['files'], $this->container['config']['view.compiled']
			);
		});

	}
}