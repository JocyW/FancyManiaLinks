<?php

namespace FML\Stylesheet;

/**
 * Class representing a ManiaLink Stylesheet
 *
 * @author    steeffeen <mail@steeffeen.com>
 * @copyright FancyManiaLinks Copyright © 2017 Steffen Schröder
 * @license   http://www.gnu.org/licenses/ GNU General Public License, Version 3
 */
class Stylesheet
{

    /**
     * @var Style3d[] $styles3d 3d Styles
     */
    protected $styles3d = array();

    /**
     * @var Mood $mood Mood
     */
    protected $mood = null;

    /**
     * Create a new Stylesheet
     *
     * @api
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get the Styles3d
     *
     * @api
     * @return Style3d[]
     */
    public function getStyles3d()
    {
        return $this->styles3d;
    }

    /**
     * Add a new Style3d
     *
     * @api
     * @param Style3d $style3d The Style3d to be added
     * @return static
     */
    public function addStyle3d(Style3d $style3d)
    {
        if (!in_array($style3d, $this->styles3d, true)) {
            array_push($this->styles3d, $style3d);
        }
        return $this;
    }

    /**
     * Remove all Style3ds
     *
     * @api
     * @return static
     */
    public function removeAllStyles3d()
    {
        $this->styles3d = array();
        return $this;
    }

    /**
     * Get the Mood
     *
     * @api
     * @return Mood
     */
    public function getMood()
    {
        return $this->mood;
    }

    /**
     * Set the Mood
     *
     * @api
     * @param Mood $mood Mood
     * @return static
     */
    public function setMood(Mood $mood = null)
    {
        $this->mood = $mood;
        return $this;
    }

    /**
     * Create a new Mood if necessary
     *
     * @api
     * @return Mood
     */
    public function createMood()
    {
        if ($this->mood) {
            return $this->mood;
        }
        $mood = new Mood();
        $this->setMood($mood);
        return $this->mood;
    }

    /**
     * Render the Stylesheet
     *
     * @param \DOMDocument $domDocument DOMDocument for which the Stylesheet should be rendered
     * @return \DOMElement
     */
    public function render(\DOMDocument $domDocument)
    {
        $stylesheetXml = $domDocument->createElement("stylesheet");
        if ($this->styles3d) {
            $stylesXml = $domDocument->createElement("frame3dstyles");
            $stylesheetXml->appendChild($stylesXml);
            foreach ($this->styles3d as $style3d) {
                $style3dXml = $style3d->render($domDocument);
                $stylesXml->appendChild($style3dXml);
            }
        }
        if ($this->mood) {
            $moodXml = $this->mood->render($domDocument);
            $stylesheetXml->appendChild($moodXml);
        }
        return $stylesheetXml;
    }

}
