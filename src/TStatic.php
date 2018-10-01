<?php
namespace Able\Statics;

trait TStatic {

	/**
	 * @throws EUncreatable
	 */
	public final function __construct() {
		throw new EUncreatable(static::class);
	}
}
