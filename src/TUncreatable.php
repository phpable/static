<?php
namespace Able\Statics;

trait TUncreatable {

	/**
	 * @throws \Exception
	 */
	public final function __construct() {
		throw new \Exception('Can\'t create an uncreatable object!');
	}

}
