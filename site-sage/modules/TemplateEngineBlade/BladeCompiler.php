<?php
namespace TemplateEngineBlade;

use ProcessWire\FileCompiler;
use ProcessWire\ProcessWire;
use function ProcessWire\wire;

class BladeCompiler extends \Illuminate\View\Compilers\BladeCompiler {

	/**
	 * Add ProcessWire namespace to files on compilation.
	 * @param string $value
	 *
	 * @return string
	 */
	public function compileString($value)
	{
		if(stripos($value, 'namespace') === false) {
			$value = '<?php namespace ProcessWire; ?>' . $value;
		}

		return parent::compileString($value);
	}
	
}