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
	 * @inheritdoc
	 * @see GenericAccessors::toHtml()
	 */
	public function toHtml(): string
	{
		$html = '<link ';
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
	 * @return $this
	 */
	public function setCharset(string $value): Link
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
	 * (SET) CROSSORIGIN
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setCrossorigin(string $value): Link
	{
		return $this->set('crossorigin', $value);
	}

	/**
	 * (GET) CROSSORIGIN
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getCrossorigin(string $escape = '"'): string
	{
		return $this->getAttr('crossorigin', $escape);
	}

	/**
	 * (SET) HREF
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setHref(string $value): Link
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
	 * (SET) HREFLANG
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setHrefLang(string $value): Link
	{
		return $this->set('hreflang', $value);
	}

	/**
	 * (GET) HREFLANG
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getHrefLang(string $escape = '"'): string
	{
		return $this->getAttr('hreflang', $escape);
	}

	/**
	 * (SET) MEDIA
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setMedia(string $value): Link
	{
		return $this->set('media', $value);
	}

	/**
	 * (GET) MEDIA
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getMedia(string $escape = '"'): string
	{
		return $this->getAttr('media', $escape);
	}

	/**
	 * (SET) REL
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setRel(string $value): Link
	{
		return $this->set('rel', $value);
	}

	/**
	 * (GET) REL
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getRel(string $escape = '"'): string
	{
		return $this->getAttr('rel', $escape);
	}

	/**
	 * (SET) REV
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setRev(string $value): Link
	{
		return $this->set('rev', $value);
	}

	/**
	 * (GET) REV
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getRev(string $escape = '"'): string
	{
		return $this->getAttr('rev', $escape);
	}

	/**
	 * (SET) SIZES
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setSizes(string $value): Link
	{
		return $this->set('sizes', $value);
	}

	/**
	 * (GET) SIZES
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getSizes(string $escape = '"'): string
	{
		return $this->getAttr('sizes', $escape);
	}

	/**
	 * (SET) TARGET
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setTarget(string $value): Link
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

	/**
	 * (SET) TYPE
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setType(string $value): Link
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
}