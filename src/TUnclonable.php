<?php
namespace Able\Statics;

trait TUnclonable {

	/**
	 * @throws \Exception
	 */
	public final function __clone() {
		throw new \Exception('Can not clone a static object!');
	}
}
