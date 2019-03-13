<?php
namespace Coercive\Utility\Head;

/**
 * Link
 *
 * @package Coercive\Utility\Head
 * @author Anthony Moral <contact@coercive.fr>
 */
class Link extends GenericAccessors
{
	/**
	 * (SET) CHARSET
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setCharset(string $value): Link
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
	 * (SET) CROSSORIGIN
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setCrossorigin(string $value): Link
	{
		return $this->offsetSet('crossorigin', $value);
	}

	/**
	 * (GET) CROSSORIGIN
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getCrossorigin(string $escape = '"'): string
	{
		return $this->get('crossorigin', $escape);
	}

	/**
	 * (SET) HREF
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setHref(string $value): Link
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
	 * (SET) HREFLANG
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setHrefLang(string $value): Link
	{
		return $this->offsetSet('hreflang', $value);
	}

	/**
	 * (GET) HREFLANG
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getHrefLang(string $escape = '"'): string
	{
		return $this->get('hreflang', $escape);
	}

	/**
	 * (SET) MEDIA
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setMedia(string $value): Link
	{
		return $this->offsetSet('media', $value);
	}

	/**
	 * (GET) MEDIA
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getMedia(string $escape = '"'): string
	{
		return $this->get('media', $escape);
	}

	/**
	 * (SET) REL
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setRel(string $value): Link
	{
		return $this->offsetSet('rel', $value);
	}

	/**
	 * (GET) REL
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getRel(string $escape = '"'): string
	{
		return $this->get('rel', $escape);
	}

	/**
	 * (SET) REV
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setRev(string $value): Link
	{
		return $this->offsetSet('rev', $value);
	}

	/**
	 * (GET) REV
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getRev(string $escape = '"'): string
	{
		return $this->get('rev', $escape);
	}

	/**
	 * (SET) SIZES
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setSizes(string $value): Link
	{
		return $this->offsetSet('sizes', $value);
	}

	/**
	 * (GET) SIZES
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getSizes(string $escape = '"'): string
	{
		return $this->get('sizes', $escape);
	}

	/**
	 * (SET) TARGET
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setTarget(string $value): Link
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

	/**
	 * (SET) TYPE
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setType(string $value): Link
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
}