<?php
namespace Coercive\Utility\Head;

use Coercive\App\Service\Container;

/**
 * Generic Accessors
 *
 * @package Coercive\Utility\Head
 * @author Anthony Moral <contact@coercive.fr>
 */
abstract class GenericAccessors extends Container
{
	/**
	 * Spit instance to html string element
	 *
	 * @return string
	 */
	abstract public function toHtml(): string;

	/**
	 * GENERIC GET ATTR
	 *
	 * @param string $name
	 * @param string $escape
	 * @return string
	 */
	public function getAttr(string $name, string $escape = '"'): string
	{
		$value = (string) $this->offsetGet($name);
		return $escape ? str_replace($escape, '', $value) : $value;
	}

	/**
	 * GENERIC SET ATTR
	 *
	 * @param string $name
	 * @param string $value
	 * @return $this
	 */
	public function setAttr(string $name, string $value)
	{
		return $this->offsetSet($name, $value);
	}

	# - HTML5 GLOBAL ATTRIBUTES
	# - @link https://www.w3schools.com/tags/ref_standardattributes.asp

	/**
	 * (SET) ACCESSKEY
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setAccessKey(string $value)
	{
		return $this->offsetSet('accesskey', $value);
	}

	/**
	 * (GET) ACCESSKEY
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getAccessKey(string $escape = '"'): string
	{
		return $this->getAttr('accesskey', $escape);
	}

	/**
	 * (SET) CLASS
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setClass(string $value)
	{
		return $this->offsetSet('class', $value);
	}

	/**
	 * (GET) CLASS
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getClass(string $escape = '"'): string
	{
		return $this->getAttr('class', $escape);
	}

	/**
	 * (SET) CONTENTEDITABLE
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setContentEditable(string $value)
	{
		return $this->offsetSet('contenteditable', $value);
	}

	/**
	 * (GET) CONTENTEDITABLE
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getContentEditable(string $escape = '"'): string
	{
		return $this->getAttr('contenteditable', $escape);
	}

	/**
	 * (SET) DATA-*
	 *
	 * @param string $name
	 * @param string $value
	 * @return $this
	 */
	public function setData(string $name, string $value)
	{
		return $this->offsetSet('data-'.$name, $value);
	}

	/**
	 * (GET) DATA-*
	 *
	 * @param string $name
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getData(string $name, string $escape = '"'): string
	{
		return $this->getAttr('data-'.$name, $escape);
	}

	/**
	 * (SET) DIR
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setDir(string $value)
	{
		return $this->offsetSet('dir', $value);
	}

	/**
	 * (GET) DIR
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getDir(string $escape = '"'): string
	{
		return $this->getAttr('dir', $escape);
	}

	/**
	 * (SET) DRAGGABLE
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setDraggable(string $value)
	{
		return $this->offsetSet('draggable', $value);
	}

	/**
	 * (GET) DRAGGABLE
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getDraggable(string $escape = '"'): string
	{
		return $this->getAttr('draggable', $escape);
	}

	/**
	 * (SET) DROPZONE
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setDropzone(string $value)
	{
		return $this->offsetSet('dropzone', $value);
	}

	/**
	 * (GET) DROPZONE
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getDropzone(string $escape = '"'): string
	{
		return $this->getAttr('dropzone', $escape);
	}

	/**
	 * (SET) HIDDEN
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setHidden(string $value)
	{
		return $this->offsetSet('hidden', $value);
	}

	/**
	 * (GET) HIDDEN
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getHidden(string $escape = '"'): string
	{
		return $this->getAttr('hidden', $escape);
	}

	/**
	 * (SET) ID
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setId(string $value)
	{
		return $this->offsetSet('id', $value);
	}

	/**
	 * (GET) ID
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getId(string $escape = '"'): string
	{
		return $this->getAttr('id', $escape);
	}

	/**
	 * (SET) LANG
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setLang(string $value)
	{
		return $this->offsetSet('lang', $value);
	}

	/**
	 * (GET) LANG
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getLang(string $escape = '"'): string
	{
		return $this->getAttr('lang', $escape);
	}

	/**
	 * (SET) SPELLCHECK
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setSpellCheck(string $value)
	{
		return $this->offsetSet('spellcheck', $value);
	}

	/**
	 * (GET) SPELLCHECK
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getSpellCheck(string $escape = '"'): string
	{
		return $this->getAttr('spellcheck', $escape);
	}

	/**
	 * (SET) STYLE
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setStyle(string $value)
	{
		return $this->offsetSet('style', $value);
	}

	/**
	 * (GET) STYLE
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getStyle(string $escape = '"'): string
	{
		return $this->getAttr('style', $escape);
	}

	/**
	 * (SET) TABINDEX
	 *
	 * @param int $value
	 * @return $this
	 */
	public function setTabIndex(int $value)
	{
		return $this->offsetSet('tabindex', $value);
	}

	/**
	 * (GET) TABINDEX
	 *
	 * @return string
	 */
	public function getTabIndex(): string
	{
		return (int) $this->getAttr('tabindex', '');
	}

	/**
	 * (SET) TITLE
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setTitle(string $value)
	{
		return $this->offsetSet('title', $value);
	}

	/**
	 * (GET) TITLE
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getTitle(string $escape = '"'): string
	{
		return $this->getAttr('title', $escape);
	}

	/**
	 * (SET) TRANSLATE
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setTranslate(string $value)
	{
		return $this->offsetSet('translate', $value);
	}

	/**
	 * (GET) TRANSLATE
	 *
	 * @param string $escape [optional]
	 * @return string
	 */
	public function getTranslate(string $escape = '"'): string
	{
		return $this->getAttr('translate', $escape);
	}
}