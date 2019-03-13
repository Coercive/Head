<?php
namespace Coercive\Utility\Head;

/**
 * Style
 *
 * @package Coercive\Utility\Head
 * @author Anthony Moral <contact@coercive.fr>
 */
class Style extends GenericAccessors
{
	/**
	 * (SET) TYPE
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setType(string $value): Style
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
	 * (SET) MEDIA
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setMedia(string $value): Style
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
	 * (SET) CONTENT
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setContent(string $value): Style
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