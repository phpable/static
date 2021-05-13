<?php
namespace Able\Static;

use Able\Exceptions\Abstractions\AException;

class EUncreatable extends AException {

	/**
	 * @var string
	 */
	protected static string $template = 'Can not create an instance of the static class: %s!';

	/**
	 * @param string $class
	 * @param Throwable|null $Previous
	 */
	public function __construct(string $class, ?Throwable $Previous = null) {
		parent::__construct(func_get_args());
	}
}
