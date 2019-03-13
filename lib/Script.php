<?php
namespace Coercive\Utility\Head;

/**
 * Script
 *
 * @package Coercive\Utility\Head
 * @author Anthony Moral <contact@coercive.fr>
 */
class Script extends GenericAccessors
{
	/**
	 * (SET) CHARSET
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setCharset(string $value): Script
	{
		return $this->offsetSet('charset', $value);
	}

	/**
	 * (GET) CHARSET
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getCharset(string $escape = '"'): string
	{
		return $this->get('charset', $escape);
	}

	/**
	 * (SET) ASYNC
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setAsync(string $value): Script
	{
		return $this->offsetSet('async', $value);
	}

	/**
	 * (GET) ASYNC
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getAsync(string $escape = '"'): string
	{
		return $this->get('async', $escape);
	}

	/**
	 * (SET) DEFER
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setDefer(string $value): Script
	{
		return $this->offsetSet('defer', $value);
	}

	/**
	 * (GET) DEFER
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getDefer(string $escape = '"'): string
	{
		return $this->get('defer', $escape);
	}

	/**
	 * (SET) SRC
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setSrc(string $value): Script
	{
		return $this->offsetSet('src', $value);
	}

	/**
	 * (GET) SRC
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getSrc(string $escape = '"'): string
	{
		return $this->get('src', $escape);
	}

	/**
	 * (SET) TYPE
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setType(string $value): Script
	{
		return $this->offsetSet('type', $value);
	}

	/**
	 * (GET) TYPE
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getType(string $escape = '"'): string
	{
		return $this->get('type', $escape);
	}

	/**
	 * (SET) CONTENT
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setContent(string $value): Script
	{
		return $this->offsetSet('content', $value);
	}

	/**
	 * (GET) CONTENT
	 *
	 * @return string
	 */
	public function getContent(): string
	{
		return $this->get('content', '');
	}
}