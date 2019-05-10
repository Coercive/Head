<?php
namespace Coercive\Utility\Head;

use Coercive\App\Service\Container;

/**
 * HTML HEAD UTILITY
 *
 * @package Coercive\Utility\Head
 * @author Anthony Moral <contact@coercive.fr>
 */
class Facebook extends GroupContainer
{
	/**
	 * @param string $data
	 * @return $this
	 */
	public function setUrl(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:url')->setContent($data);
		$this->Meta('og:url', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setTitle(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:title')->setContent($data);
		$this->Meta('og:title', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setDescription(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:description')->setContent($data);
		$this->Meta('og:description', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setImage(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:image')->setContent($data);
		$this->Meta('og:image', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setImageUrl(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:image:url')->setContent($data);
		$this->Meta('og:image:url', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setImageSecureUrl(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:image:secure_url')->setContent($data);
		$this->Meta('og:image:secure_url', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setImageType(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:image:type')->setContent($data);
		$this->Meta('og:image:type', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setImageWidth(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:image:width')->setContent($data);
		$this->Meta('og:image:width', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setImageHeight(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:image:height')->setContent($data);
		$this->Meta('og:image:height', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setImageAlt(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:image:alt')->setContent($data);
		$this->Meta('og:image:alt', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setAppId(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('fb:app_id')->setContent($data);
		$this->Meta('fb:app_id', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setType(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:type')->setContent($data);
		$this->Meta('og:type', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setLocale(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:locale')->setContent($data);
		$this->Meta('og:locale', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setSiteName(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:site_name')->setContent($data);
		$this->Meta('og:site_name', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setVideo(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:video')->setContent($data);
		$this->Meta('og:video', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setVideoUrl(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:video:url')->setContent($data);
		$this->Meta('og:video:url', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setVideoSecureUrl(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:video:secure_url')->setContent($data);
		$this->Meta('og:video:secure_url', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setVideoType(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:video:type')->setContent($data);
		$this->Meta('og:video:type', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setVideoWidth(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:video:width')->setContent($data);
		$this->Meta('og:video:width', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setVideoHeight(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:video:height')->setContent($data);
		$this->Meta('og:video:height', $meta);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setAsset(string $data): Facebook
	{
		$meta = (new Meta)->setProperty('og:asset')->setContent($data);
		$this->Meta('og:asset', $meta);
		return $this;
	}
}
