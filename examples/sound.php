<?php

// Include FML
require_once __DIR__ . '/../autoload.php';

// Create ManiaLink
$maniaLink = new \FML\ManiaLink();

// Create quad playing a sound on click
$soundQuad = new \FML\Controls\Quads\Quad_Icons64x64_1();
$maniaLink->addChild($soundQuad);
$soundQuad->setSize(40, 40)
          ->setSubStyle($soundQuad::SUBSTYLE_ClipPlay)
          ->addUISoundFeature(\FML\Script\Features\UISound::Capture);

// Print xml
echo $maniaLink;
