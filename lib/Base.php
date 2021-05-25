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
	 * @inheritdoc
	 * @see GenericAccessors::toHtml()
	 */
	public function toHtml(): string
	{
		$html = '<base ';
		foreach ($this->getArrayCopy() as $attr => $data) {
			$html .= $attr . '="' . str_replace('"', '', $data) . '" ';
		}
		$html .= '/>';
		return $html;
	}

	/**
	 * (SET) HREF
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setHref(string $value): Base
	{
		return $this->set('href', $value);
	}

	/**
	 * (GET) HREF
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getHref(string $escape = '"'): string
	{
		return $this->getAttr('href', $escape);
	}

	/**
	 * (SET) TARGET
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setTarget(string $value): Base
	{
		return $this->set('target', $value);
	}

	/**
	 * (GET) TARGET
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getTarget(string $escape = '"'): string
	{
		return $this->getAttr('target', $escape);
	}
}
