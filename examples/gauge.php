<?php
// TODO: validate example
// Include FML
require_once __DIR__ . '/../FML/autoload.php';

// Create manialink
$manialink = new \FML\ManiaLink();

// Gauge fill status
$gaugeFillStatus = 0.75;

// Create gauge element
$gauge = new \FML\Controls\Gauge();
$manialink->add($gauge);
$gauge->setSize(100, 40);
$gauge->setColor('0f5');
// TODO: validate grading
$gauge->setGrading(3);
$gauge->setDrawBlockBg(false);
$gauge->setRatio($gaugeFillStatus);

// Create label for gauge value
$label = new \FML\Controls\Labels\Label_Text();
$manialink->add($label);
$label->setStyle($label::STYLE_TextTitle1);
$label->setTextSize(4);
$label->setText($gaugeFillStatus . '%');

// Print xml
$manialink->render(true);