<?php

namespace FML\ManiaCode;

/**
 * ManiaCode Element for viewing a replay
 *
 * @author    steeffeen <mail@steeffeen.com>
 * @copyright FancyManiaLinks Copyright © 2014 Steffen Schröder
 * @license   http://www.gnu.org/licenses/ GNU General Public License, Version 3
 */
class ViewReplay implements Element {
	/*
	 * Protected properties
	 */
	protected $tagName = 'view_replay';
	protected $name = null;
	protected $url = null;

	/**
	 * Create a new ViewReplay object
	 *
	 * @param string $name (optional) Replay name
	 * @param string $url  (optional) Replay url
	 * @return static
	 */
	public static function create($name = null, $url = null) {
		return new static($name, $url);
	}

	/**
	 * Construct a new ViewReplay object
	 *
	 * @param string $name (optional) Replay name
	 * @param string $url  (optional) Replay url
	 */
	public function __construct($name = null, $url = null) {
		if (!is_null($name)) {
			$this->setName($name);
		}
		if (!is_null($url)) {
			$this->setUrl($url);
		}
	}

	/**
	 * Set the name of the replay
	 *
	 * @param string $name Replay name
	 * @return static
	 */
	public function setName($name) {
		$this->name = (string)$name;
		return $this;
	}

	/**
	 * Set the url of the replay
	 *
	 * @param string $url Replay url
	 * @return static
	 */
	public function setUrl($url) {
		$this->url = (string)$url;
		return $this;
	}

	/**
	 * @see \FML\ManiaCode\Element::render()
	 */
	public function render(\DOMDocument $domDocument) {
		$xmlElement  = $domDocument->createElement($this->tagName);
		$nameElement = $domDocument->createElement('name', $this->name);
		$xmlElement->appendChild($nameElement);
		$urlElement = $domDocument->createElement('url', $this->url);
		$xmlElement->appendChild($urlElement);
		return $xmlElement;
	}
}
