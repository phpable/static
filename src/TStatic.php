<?php
namespace Able\Static;

trait TStatic {

	/**
	 * @throws EUncreatable
	 */
	public final function __construct() {
		throw new EUncreatable(static::class);
	}
}
