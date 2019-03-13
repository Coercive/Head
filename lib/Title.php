<?php
namespace Coercive\Utility\Head;

/**
 * Title
 *
 * @package Coercive\Utility\Head
 * @author Anthony Moral <contact@coercive.fr>
 */
class Title extends GenericAccessors
{
	/**
	 * (SET) CONTENT
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setContent(string $value): Title
	{
		$value = preg_replace('<|>', '', strip_tags($value));
		return $this->offsetSet('content', $value);
	}

	/**
	 * (GET) CONTENT
	 *
	 * @return string
	 */
	public function getContent(): string
	{
		return $this->get('content');
	}
}