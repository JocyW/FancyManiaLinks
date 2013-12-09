<?php

namespace FML\Controls\Quads;

use FML\Controls\Quad;

/**
 * Quad class for style 'Hud3dEchelons'
 *
 * @author steeffeen
 */
class Quad_Hud3dEchelons extends Quad {
	/**
	 * Constants
	 */
	const STYLE = 'Hud3dEchelons';
    const SUBSTYLE_EchelonBronze1 = 'EchelonBronze1';
    const SUBSTYLE_EchelonBronze2 = 'EchelonBronze2';
    const SUBSTYLE_EchelonBronze3 = 'EchelonBronze3';
    const SUBSTYLE_EchelonGold1 = 'EchelonGold1';
    const SUBSTYLE_EchelonGold2 = 'EchelonGold2';
    const SUBSTYLE_EchelonGold3 = 'EchelonGold3';
    const SUBSTYLE_EchelonSilver1 = 'EchelonSilver1';
    const SUBSTYLE_EchelonSilver2 = 'EchelonSilver2';
    const SUBSTYLE_EchelonSilver3 = 'EchelonSilver3';

	/**
	 * Construct Hud3dEchelons quad
	 */
	public function __construct() {
		parent::__construct();
		$this->setStyle(self::STYLE);
	}
}
