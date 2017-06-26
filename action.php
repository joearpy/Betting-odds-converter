<?php

if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    die('Are you hacker?');
}

require_once 'class/validator.class.php';
require_once 'class/converter.class.php';
require_once 'class/db.class.php';
require_once 'class/log.class.php';
require_once 'class/saveData.class.php';

if (!empty($_POST["user_odds"]) && !empty($_POST["user_odds_type"])) {
    $iOddsFromUser = trim($_POST["user_odds"]);
    $sUserOddsType = trim($_POST["user_odds_type"]);
} else {
    $result = array('no', 'Something went wrong');
    echo json_encode($result);
    die;
}

$oValidator = new Validator();
$isValid = $oValidator->doValidate($iOddsFromUser, $sUserOddsType);

if (!$isValid) {
    $result = array('no', 'Check the format!');
    echo json_encode($result);
    die;
}

$oOddsConverter = new Converter($iOddsFromUser, $sUserOddsType);
$result = $oOddsConverter->doConverting();
$result = json_encode($result);

$oLog = new Log();
$oLog->saveLog($result);

$oSaveData = new SaveData();
$oSaveData->saveConvertedOdds($result);

echo $result;

die();
