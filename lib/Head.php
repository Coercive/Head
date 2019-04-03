<?php
namespace Coercive\Utility\Head;

use Coercive\App\Service\Container;

/**
 * HTML HEAD UTILITY
 *
 * @package Coercive\Utility\Head
 * @link https://github.com/Coercive/Head
 *
 * @author Anthony Moral <contact@coercive.fr>
 * @copyright (c) 2019 Anthony Moral
 * @license MIT
 */
class Head extends Container
{
	public function toHtml(): string
	{
		$html = '';

		/** @var GenericAccessors|array $items */
		foreach ($this->getArrayCopy() as $items) {

			if(is_array($items)) {
				/** @var GenericAccessors $item */
				foreach ($items as $item) {
					$html .= $item->toHtml();
					$html .= "\n";
				}
			}

			else {
				$html .= $items->toHtml();
				$html .= "\n";
			}

		}

		return $html;
	}

	public function addCustomMeta(string $name, Meta $meta, bool $uniq = true): Head
	{
		# Add uniq Meta
		if($uniq)
		{
			$this->set($name, $meta);
		}

		# Add multi Meta
		else
		{
			$this->push($name, $meta);
		}

		# Maintain chainability
		return $this;
	}

	public function addMeta(string $name, string $value, bool $uniq = true): Head
	{
		# Prepare Meta
		$meta = (new Meta)
			->setName($name)
			->setContent($value);

		# Add
		return $this->addCustomMeta($name, $meta, $uniq);
	}

	public function addCustomTitle(Title $title): Head
	{
		return $this->set('title', $title);
	}

	public function addTitle(string $value): Head
	{
		$title = (new Title)->setContent($value);
		return $this->addCustomTitle($title);
	}

	public function addCustomBase(Base $base): Head
	{
		return $this->set('base', $base);
	}

	public function addBase(string $href, string $target): Head
	{
		$base = (new Base)->setHref($href)->setTarget($target);
		return $this->addCustomBase($base);
	}

	public function addCharset(string $value): Head
	{
		$meta = (new Meta)->setCharset($value);
		return $this->addCustomMeta('charset', $meta);
	}

	public function addRefresh(string $value): Head
	{
		$meta = (new Meta)->setHttpEquiv('refresh')->setContent($value);
		return $this->addCustomMeta('refresh', $meta);
	}

	public function addDescription(string $value): Head
	{
		return $this->addMeta('description', $value);
	}

	public function addAuthor(string $value): Head
	{
		return $this->addMeta('author', $value);
	}

	public function addGenerator(string $value): Head
	{
		return $this->addMeta('generator', $value);
	}

	public function addKeywords(string $value): Head
	{
		return $this->addMeta('keywords', $value);
	}

	public function addViewport(string $value): Head
	{
		return $this->addMeta('viewport', $value);
	}

	public function addRobots(string $value): Head
	{
		return $this->addMeta('robots', $value);
	}

	public function addExpires(string $value): Head
	{
		return $this->addMeta('expires', $value);
	}

	public function addLastModified(string $value): Head
	{
		return $this->addMeta('last-modified', $value);
	}

	public function addCustomCssLink(Link $link): Head
	{
		return $this->push('link', $link);
	}

	public function addCssLink(string $href, string $media = 'screen'): Head
	{
		$link = (new Link)
			->setRel('stylesheet')
			->setType('text/css')
			->setCharset('utf-8')
			->setMedia($media)
			->setHref($href);
		return $this->addCustomCssLink($link);
	}

	public function addCustomScript(Script $script): Head
	{
		return $this->push('script', $script);
	}

	public function addScriptSource(string $src): Head
	{
		$script = (new Script)
			->setType('text/javascript')
			->setSrc($src);
		return $this->addCustomScript($script);
	}
}