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
	 * @param string $value
	 * @param string|null $direction [optional] [default=before]
	 * @param string|null $separator [optional] [default= | ]
	 * @return $this
	 */
	public function addContent(string $value, ? string $direction = null, ? string $separator = null): Title
	{
		if(null === $direction) {
			$direction = 'before';
		}
		if(null === $separator) {
			$separator = ' | ';
		}
		if($value && $current = $this->offsetGet('content')) {
			switch ($direction) {
				case 'right':
				case 'after':
					$value = $current . $separator . $value;
					break;
				case 'left':
				case 'before':
				default:
					$value = $value . $separator . $current;
			}
		}
		return $this->setContent($value);
	}

	/**
	 * @param string $value
	 * @param string|null $separator [optional] [default= | ]
	 * @return $this
	 */
	public function addContentBefore(string $value, ? string $separator = null): Title
	{
		return $this->addContent($value, 'before', $separator);
	}

	/**
	 * @param string $value
	 * @param string|null $separator [optional] [default= | ]
	 * @return $this
	 */
	public function addContentAfter(string $value, ? string $separator = null): Title
	{
		return $this->addContent($value, 'after', $separator);
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
