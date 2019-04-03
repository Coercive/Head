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
	 * @inheritdoc
	 * @see GenericAccessors::toHtml()
	 */
	public function toHtml(): string
	{
		$html = '<style ';
		foreach ($this->getArrayCopy() as $attr => $data) {
			if($attr === 'content') { continue; }
			$html .= $attr . '"' . str_replace('"', '', $data) . '" ';
		}
		$html .= '>';
		if($this->offsetExists('content')) {
			$html .= $this->getContent();
		}
		$html .= '</style>';
		return $html;
	}

	/**
	 * (SET) TYPE
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setType(string $value): Style
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
	 * (SET) MEDIA
	 *
	 * @param string $value

	 * @return $this
	 */
	public function setMedia(string $value): Style
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
	 * (SET) CONTENT
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setContent(string $value): Style
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