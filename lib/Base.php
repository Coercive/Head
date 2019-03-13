<?php
namespace Coercive\Utility\Head;

/**
 * Base
 *
 * @package Coercive\Utility\Head
 * @author Anthony Moral <contact@coercive.fr>
 */
class Base extends GenericAccessors
{
	/**
	 * (SET) HREF
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setHref(string $value): Base
	{
		return $this->offsetSet('href', $value);
	}

	/**
	 * (GET) HREF
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getHref(string $escape = '"'): string
	{
		return $this->get('href', $escape);
	}

	/**
	 * (SET) TARGET
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setTarget(string $value): Base
	{
		return $this->offsetSet('target', $value);
	}

	/**
	 * (GET) TARGET
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getTarget(string $escape = '"'): string
	{
		return $this->get('target', $escape);
	}
}