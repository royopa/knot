<?php namespace Knot\Dict\Helpers;

use Knot\Dict\HelperManager;

interface HelperInterface {

	/**
	 * Helper code name.
	 * @return string
	 */
	public function getName();


	/**
	 * Load Function Routes!
	 *
	 * @param HelperManager $helperManager
	 *
	 * @return void
	 */
	public function addRoutes(HelperManager $helperManager);
}
