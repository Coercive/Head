<?php
namespace Coercive\Utility\Head;

use Coercive\App\Service\Container;

/**
 * Generic Accessors
 *
 * @package Coercive\Utility\Head
 * @author Anthony Moral <contact@coercive.fr>
 */
abstract class GroupContainer extends Container
{
	/**
	 * Automatic HTML export
	 *
	 * @return string
	 */
	public function toHtml(): string
	{
		$html = '';

		/** @var GenericAccessors|array $items */
		foreach ($this->getArrayCopy() as $items) {

			if(is_array($items)) {
				/** @var GenericAccessors $item */
				foreach ($items as $item) {
					if ($item instanceof GenericAccessors || $item instanceof GroupContainer) {
						$html .= $item->toHtml();
						$html .= "\n";
					}
				}
			}

			elseif ($items instanceof GenericAccessors || $items instanceof GroupContainer) {
				$html .= $items->toHtml();
				$html .= "\n";
			}

		}

		return $html;
	}

	/**
	 * Manual add a custom metatag
	 *
	 * @param string $name
	 * @param Meta $meta
	 * @param bool $uniq [optional]
	 * @return $this
	 */
	public function addCustomMeta(string $name, Meta $meta, bool $uniq = true)
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

	/**
	 * Manual add a basic metatag
	 *
	 * @param string $name
	 * @param string $value
	 * @param bool $uniq [optional]
	 * @return $this
	 */
	public function addMeta(string $name, string $value, bool $uniq = true)
	{
		# Prepare Meta
		$meta = (new Meta)
			->setName($name)
			->setContent($value);

		# Add
		return $this->addCustomMeta($name, $meta, $uniq);
	}

	/**
	 * Meta
	 *
	 * @param string $name
	 * @param Meta $meta [optional]
	 * @return Meta
	 */
	public function Meta(string $name, Meta $meta = null): Meta
	{
		if($meta) {
			$this->set($name, $meta);
		}
		elseif(!($meta = $this->get($name))) {
			$meta = new Meta;
			$meta->setName($name);
			$this->set($name, $meta);
		}
		return $meta;
	}
}
