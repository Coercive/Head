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
	public function addCustomMeta(string $name, Meta $meta, bool $uniq = true): Head
	{
		# Add uniq Meta
		if($uniq)
		{
			$this->offsetSet($name, $meta);
		}

		# Add multi Meta
		else
		{
			$this->offsetPush($name, $meta);
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

	public function addTitle(string $value): Head
	{
		$title = (new Title)->setContent($value);
		return $this->offsetSet('title', $title);
	}

	public function addBase(string $href, string $target): Head
	{
		$base = (new Base)->setHref($href)->setTarget($target);
		return $this->offsetSet('base', $base);
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

	public function addCssLink(string $href, string $media = 'screen'): Head
	{
		$link = (new Link)
			->setRel('stylesheet')
			->setType('text/css')
			->setCharset('utf-8')
			->setMedia($media)
			->setHref($href);
		return $this->offsetPush('link', $link);
	}
}