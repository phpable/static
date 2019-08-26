<?php
namespace Able\Statics;

trait TStatic {

	/**
	 * @throws \Exception
	 */
	public final function __construct() {
		throw new \Exception(sprintf('Can not create an instance of the static class: %s!', static::class));
	}

}
