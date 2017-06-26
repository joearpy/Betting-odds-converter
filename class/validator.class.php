<?php

class Validator {

    public function doValidate($odds, $sOddsType) {
        if ($sOddsType == "uk") {
            $aNumbers = explode("/", $odds);
            $pattern = "/[\/]/";
            if (!preg_match($pattern, $odds)) {
                return false;
            } elseif (!is_numeric($aNumbers[0]) && !is_numeric($aNumbers[1])) {
                return false;
            }
        }
        if ($sOddsType == "eu") {
            if (!is_numeric($odds)) {
                return false;
            } elseif (!is_float($odds + 0)) {
                return false;
            }
        }
        if ($sOddsType == "usa") {
            $pattern = "/^[-+]?[0-9]*\.?[0-9]+$/";
            if (!preg_match($pattern, $odds)) {
                return false;
            }
        }
        return true;
    }

}
