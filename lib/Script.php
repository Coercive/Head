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
	 * @inheritdoc
	 * @see GenericAccessors::toHtml()
	 */
	public function toHtml(): string
	{
		$html = '<script ';
		foreach ($this->getArrayCopy() as $attr => $data) {
			if($attr === 'content') { continue; }
			$html .= $attr . '="' . str_replace('"', '', $data) . '" ';
		}
		$html .= '>';
		if($this->offsetExists('content')) {
			$html .= $this->getContent();
		}
		$html .= '</script>';
		return $html;
	}

	/**
	 * (SET) CHARSET
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setCharset(string $value): Script
	{
		return $this->set('charset', $value);
	}

	/**
	 * (GET) CHARSET
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getCharset(string $escape = '"'): string
	{
		return $this->getAttr('charset', $escape);
	}

	/**
	 * (SET) ASYNC
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setAsync(string $value): Script
	{
		return $this->set('async', $value);
	}

	/**
	 * (GET) ASYNC
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getAsync(string $escape = '"'): string
	{
		return $this->getAttr('async', $escape);
	}

	/**
	 * (SET) DEFER
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setDefer(string $value): Script
	{
		return $this->set('defer', $value);
	}

	/**
	 * (GET) DEFER
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getDefer(string $escape = '"'): string
	{
		return $this->getAttr('defer', $escape);
	}

	/**
	 * (SET) SRC
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setSrc(string $value): Script
	{
		return $this->set('src', $value);
	}

	/**
	 * (GET) SRC
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getSrc(string $escape = '"'): string
	{
		return $this->getAttr('src', $escape);
	}

	/**
	 * (SET) TYPE
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setType(string $value): Script
	{
		return $this->set('type', $value);
	}

	/**
	 * (GET) TYPE
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getType(string $escape = '"'): string
	{
		return $this->getAttr('type', $escape);
	}

	/**
	 * (SET) CONTENT
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setContent(string $value): Script
	{
		return $this->set('content', $value);
	}

	/**
	 * (GET) CONTENT
	 *
	 * @return string
	 */
	public function getContent(): string
	{
		return $this->getAttr('content', '');
	}
}
