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
class Head extends GroupContainer
{
	/**
	 * Meta Title
	 *
	 * @param Title $title [optional]
	 * @return Title
	 */
	public function Title(Title $title = null): Title
	{
		if($title) {
			$this->set('title', $title);
		}
		elseif(!($title = $this->get('title'))) {
			$title = new Title;
			$this->set('title', $title);
		}
		return $title;
	}

	/**
	 * Meta Base
	 *
	 * @param Base $base [optional]
	 * @return Base
	 */
	public function Base(Base $base = null): Base
	{
		if($base) {
			$this->set('base', $base);
		}
		elseif(!($base = $this->get('base'))) {
			$base = new Base;
			$this->set('base', $base);
		}
		return $base;
	}

	/**
	 * Og
	 *
	 * @param Og $og [optional]
	 * @return Og
	 */
	public function Og(Og $og = null): Og
	{
		if($og) {
			$this->set('og', $og);
		}
		elseif(!($og = $this->get('og'))) {
			$og = new Og;
			$this->set('og', $og);
		}
		return $og;
	}
	
	/**
	 * Facebook
	 *
	 * @param Facebook $facebook [optional]
	 * @return Facebook
	 */
	public function Facebook(Facebook $facebook = null): Facebook
	{
		if($facebook) {
			$this->set('facebook', $facebook);
		}
		elseif(!($facebook = $this->get('facebook'))) {
			$facebook = new Facebook;
			$this->set('facebook', $facebook);
		}
		return $facebook;
	}

	/**
	 * Twitter
	 *
	 * @param Twitter $twitter [optional]
	 * @return Twitter
	 */
	public function Twitter(Twitter $twitter = null): Twitter
	{
		if($twitter) {
			$this->set('twitter', $twitter);
		}
		elseif(!($twitter = $this->get('twitter'))) {
			$twitter = new Twitter;
			$this->set('twitter', $twitter);
		}
		return $twitter;
	}

	/**
	 * Meta Base
	 *
	 * @param Meta $meta [optional]
	 * @return Meta
	 */
	public function Charset(Meta $meta = null): Meta
	{
		return $this->Meta('charset', $meta);
	}

	/**
	 * Meta Refresh
	 *
	 * @param Meta $meta [optional]
	 * @return Meta
	 */
	public function Refresh(Meta $meta = null): Meta
	{
		return $this->Meta('refresh', $meta);
	}

	/**
	 * Meta Description
	 *
	 * @param Meta $meta [optional]
	 * @return Meta
	 */
	public function Description(Meta $meta = null): Meta
	{
		return $this->Meta('description', $meta);
	}

	/**
	 * Meta Author
	 *
	 * @param Meta $meta [optional]
	 * @return Meta
	 */
	public function Author(Meta $meta = null): Meta
	{
		return $this->Meta('author', $meta);
	}

	/**
	 * Meta Generator
	 *
	 * @param Meta $meta [optional]
	 * @return Meta
	 */
	public function Generator(Meta $meta = null): Meta
	{
		return $this->Meta('generator', $meta);
	}

	/**
	 * Meta Generator
	 *
	 * @param Meta $meta [optional]
	 * @return Meta
	 */
	public function Keywords(Meta $meta = null): Meta
	{
		return $this->Meta('keywords', $meta);
	}

	/**
	 * Meta Viewport
	 *
	 * @param Meta $meta [optional]
	 * @return Meta
	 */
	public function Viewport(Meta $meta = null): Meta
	{
		return $this->Meta('viewport', $meta);
	}

	/**
	 * Meta Robots
	 *
	 * @param Meta $meta [optional]
	 * @return Meta
	 */
	public function Robots(Meta $meta = null): Meta
	{
		return $this->Meta('robots', $meta);
	}

	/**
	 * Meta Expires
	 *
	 * @param Meta $meta [optional]
	 * @return Meta
	 */
	public function Expires(Meta $meta = null): Meta
	{
		return $this->Meta('expires', $meta);
	}

	/**
	 * Meta LastModified
	 *
	 * @param Meta $meta [optional]
	 * @return Meta
	 */
	public function LastModified(Meta $meta = null): Meta
	{
		return $this->Meta('last-modified', $meta);
	}

	/**
	 * Add custom link tag
	 *
	 * @param Link $link
	 * @return Head
	 */
	public function addCustomCssLink(Link $link): Head
	{
		return $this->push('link', $link);
	}

	/**
	 * Add autobasics css link tag
	 *
	 * @param string $href
	 * @param string $media [optional]
	 * @return Head
	 */
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

	/**
	 * Add custom script tag
	 *
	 * @param Script $script
	 * @return Head
	 */
	public function addCustomScript(Script $script): Head
	{
		return $this->push('script', $script);
	}

	/**
	 * Add basic script tag
	 *
	 * @param string $src
	 * @return Head
	 */
	public function addScriptSource(string $src): Head
	{
		$script = (new Script)
			->setType('text/javascript')
			->setSrc($src);
		return $this->addCustomScript($script);
	}
}
