<?php

// Include FML
require_once __DIR__ . '/../FML/autoload.php';

// Create customUI
$customUI = new FML\CustomUI();

// Disable various display settings
$customUI->setChallengeInfoVisible(false);
$customUI->setCheckpointListVisible(false);
$customUI->setRoundScoresVisible(false);

// Print xml
$domDocument = $customUI->render();
$xmlText = $domDocument->saveXML();
echo $xmlText;