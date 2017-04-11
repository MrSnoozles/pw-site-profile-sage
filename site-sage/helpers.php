<?php namespace ProcessWire;

/**
 * ProcessWire Sage Theme Helpers
 * ====================================
 * This file gets called from init.php and contains various functions that make working with PHP easier
 *
 */


if(! function_exists('array_get')) {
	/**
	 * Get an element from an array using dot notation.
	 *
	 * @param $array
	 * @param $key
	 * @param null $default
	 *
	 * @return mixed
	 */
	function array_get($array, $key, $default = null)
	{
		if (is_null($key)) return $array;

		if (isset($array[$key])) return $array[$key];

		foreach (explode('.', $key) as $segment)
		{
			if ( ! is_array($array) || ! array_key_exists($segment, $array))
			{
				return value($default);
			}

			$array = $array[$segment];
		}

		return $array;
	}
}