<?php

namespace Kirby\Cms;

/**
 * The StructureObject represents each item
 * in a Structure collection. StructureObjects
 * behave pretty much the same as Pages or Users
 * and have a Content object to access their fields.
 * All fields in a StructureObject are therefore also
 * wrapped in a Field object and can be accessed in
 * the same way as Page fields. They also use the same
 * Field methods.
 *
 * @package   Kirby Cms
 * @author    Bastian Allgeier <bastian@getkirby.com>
 * @link      https://getkirby.com
 * @copyright Bastian Allgeier
 * @license   https://getkirby.com/license
 */
class StructureObject extends Model
{
	use HasSiblings;

	/**
	 * The content
	 *
	 * @var Content
	 */
	protected $content;

	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @var \Kirby\Cms\Site|\Kirby\Cms\Page|\Kirby\Cms\File|\Kirby\Cms\User|null
	 */
	protected $parent;

	/**
	 * The parent Structure collection
	 *
	 * @var Structure
	 */
	protected $structure;

	/**
	 * Modified getter to also return fields
	 * from the object's content
	 *
	 * @param string $method
	 * @param array $arguments
	 * @return mixed
	 */
	public function __call(string $method, array $arguments = [])
	{
		// public property access
		if (isset($this->$method) === true) {
			return $this->$method;
		}

		return $this->content()->get($method);
	}

	/**
	 * Creates a new StructureObject with the given props
	 *
	 * @param array $props
	 */
	public function __construct(array $props)
	{
		$this->setProperties($props);
	}

	/**
	 * Returns the content
	 *
	 * @return \Kirby\Cms\Content
	 */
	public function content()
	{
		if ($this->content instanceof Content) {
			return $this->content;
		}

		if (is_array($this->content) !== true) {
			$this->content = [];
		}

		return $this->content = new Content($this->content, $this->parent());
	}

	/**
	 * Returns the required id
	 *
	 * @return string
	 */
	public function id(): string
	{
		return $this->id;
	}

	/**
	 * Compares the current object with the given structure object
	 *
	 * @param mixed $structure
	 * @return bool
	 */
	public function is($structure): bool
	{
		if ($structure instanceof self === false) {
			return false;
		}

		return $this === $structure;
	}

	/**
	 * Returns the parent Model object
	 *
	 * @return \Kirby\Cms\Model
	 */
	public function parent()
	{
		return $this->parent;
	}

	/**
	 * Sets the Content object with the given parent
	 *
	 * @param array|null $content
	 * @return $this
	 */
	protected function setContent(array $content = null)
	{
		$this->content = $content;
		return $this;
	}

	/**
	 * Sets the id of the object.
	 * The id is required. The structure
	 * class will use the index, if no id is
	 * specified.
	 *
	 * @param string $id
	 * @return $this
	 */
	protected function setId(string $id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * Sets the parent Model
	 *
	 * @return $this
	 * @param \Kirby\Cms\Site|\Kirby\Cms\Page|\Kirby\Cms\File|\Kirby\Cms\User|null $parent
	 */
	protected function setParent(Model $parent = null)
	{
		$this->parent = $parent;
		return $this;
	}

	/**
	 * Sets the parent Structure collection
	 *
	 * @param \Kirby\Cms\Structure|null $structure
	 * @return $this
	 */
	protected function setStructure(Structure $structure = null)
	{
		$this->structure = $structure;
		return $this;
	}

	/**
	 * Returns the parent Structure collection as siblings
	 *
	 * @return \Kirby\Cms\Structure
	 */
	protected function siblingsCollection()
	{
		return $this->structure;
	}

	/**
	 * Converts all fields in the object to a
	 * plain associative array. The id is
	 * injected into the array afterwards
	 * to make sure it's always present and
	 * not overloaded in the content.
	 *
	 * @return array
	 */
	public function toArray(): array
	{
		$array = $this->content()->toArray();
		$array['id'] = $this->id();

		ksort($array);

		return $array;
	}
}
