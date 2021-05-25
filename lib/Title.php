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
	 * @inheritdoc
	 * @see GenericAccessors::toHtml()
	 */
	public function toHtml(): string
	{
		$html = '<title ';
		foreach ($this->getArrayCopy() as $attr => $data) {
			if($attr !== 'content') {
				$html .= $attr . '="' . str_replace('"', '', $data) . '" ';
			}
		}
		$html .= '>' . $this->getContent() . '</title>';
		return $html;
	}

	/**
	 * (SET) CONTENT
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setContent(string $value): Title
	{
		$value = preg_replace('<|>', '', strip_tags($value));
		return $this->set('content', $value);
	}

	/**
	 * (GET) CONTENT
	 *
	 * @return string
	 */
	public function getContent(): string
	{
		return $this->getAttr('content');
	}
}
