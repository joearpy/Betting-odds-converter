<?php

class SaveData extends DB {
    
    public function saveConvertedOdds($json) {
        try {
            $dateTime = date("Y-m-d H:i:s");
            
            $db = $this->connection;
            $query = $db->prepare("INSERT INTO odds_storage (`odds_json`, `odds_convert_time`) VALUES (:odds_json, :odds_convert_time)");
            $query->bindParam("odds_json", $json, PDO::PARAM_STR);
            $query->bindParam("odds_convert_time", $dateTime, PDO::PARAM_STR);
            $query->execute();

        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }    
    
}