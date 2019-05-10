<?php
namespace Coercive\Utility\Head;

use Coercive\App\Service\Container;

/**
 * HTML HEAD UTILITY
 *
 * @package Coercive\Utility\Head
 * @author Anthony Moral <contact@coercive.fr>
 */
class Twitter extends GroupContainer
{
	/**
	 * @param string $data
	 * @return $this
	 */
	public function setCard(string $data): Facebook
	{
		$this->Meta('twitter:card')->setContent($data);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setSite(string $data): Facebook
	{
		$this->Meta('twitter:site')->setContent($data);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setCreator(string $data): Facebook
	{
		$this->Meta('twitter:creator')->setContent($data);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setUrl(string $data): Facebook
	{
		$this->Meta('twitter:url')->setContent($data);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setTitle(string $data): Facebook
	{
		$this->Meta('twitter:title')->setContent($data);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setDescription(string $data): Facebook
	{
		$this->Meta('twitter:description')->setContent($data);
		return $this;
	}

	/**
	 * @param string $data
	 * @return $this
	 */
	public function setImage(string $data): Facebook
	{
		$this->Meta('twitter:image')->setContent($data);
		return $this;
	}
}
