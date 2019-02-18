<?php
namespace Able\Statics;

trait TUncreatable {

	/**
	 * @throws \Exception
	 */
	public final function __construct() {
		throw new \Exception('Can not create a static object!');
	}

}
