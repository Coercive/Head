<?php
namespace Coercive\Utility\Head;

/**
 * Meta
 *
 * @package Coercive\Utility\Head
 * @author Anthony Moral <contact@coercive.fr>
 */
class Meta extends GenericAccessors
{
	/**
	 * @inheritdoc
	 * @see GenericAccessors::toHtml()
	 */
	public function toHtml(): string
	{
		$html = '<meta ';
		foreach ($this->getArrayCopy() as $attr => $data) {
			$html .= $attr . '"' . str_replace('"', '', $data) . '" ';
		}
		$html .= '/>';
		return $html;
	}

	/**
	 * (SET) CHARSET
	 *
	 * @param string $value
	 * @return Meta
	 */
	public function setCharset(string $value): Meta
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
	 * (SET) NAME
	 *
	 * @param string $value

	 * @return Meta
	 */
	public function setName(string $value): Meta
	{
		return $this->set('name', $value);
	}

	/**
	 * (GET) NAME
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getName(string $escape = '"'): string
	{
		return $this->getAttr('name', $escape);
	}

	/**
	 * (SET) CONTENT
	 *
	 * @param string $value
	 * @return Meta
	 */
	public function setContent(string $value): Meta
	{
		return $this->set('content', $value);
	}

	/**
	 * (GET) CONTENT
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getContent(string $escape = '"'): string
	{
		return $this->getAttr('content', $escape);
	}

	/**
	 * (SET) PROPERTY
	 *
	 * @param string $value
	 * @return Meta
	 */
	public function setProperty(string $value): Meta
	{
		return $this->set('property', $value);
	}

	/**
	 * (GET) PROPERTY
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getProperty(string $escape = '"'): string
	{
		return $this->getAttr('property', $escape);
	}

	/**
	 * (SET) HTTP-EQUIV
	 *
	 * @param string $value
	 * @return Meta
	 */
	public function setHttpEquiv(string $value): Meta
	{
		return $this->set('http-equiv', $value);
	}

	/**
	 * (GET) HTTP-EQUIV
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getHttpEquiv(string $escape = '"'): string
	{
		return $this->getAttr('http-equiv', $escape);
	}

	/**
	 * (SET) ITEMPROP
	 *
	 * @param string $value
	 * @return Meta
	 */
	public function setItemprop(string $value): Meta
	{
		return $this->set('itemprop', $value);
	}

	/**
	 * (GET) HTTP-EQUIV
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getItemprop(string $escape = '"'): string
	{
		return $this->getAttr('itemprop', $escape);
	}
}