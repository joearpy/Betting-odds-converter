<?php

class Log extends DB {
    
    public function saveLog($logJson) {
        try {
            $dateTime = date("Y-m-d H:i:s");
            
            $db = $this->connection;
            $query = $db->prepare("INSERT INTO logs (`log_json`, `log_date`) VALUES (:log_json, :log_date)");
            $query->bindParam("log_json", $logJson, PDO::PARAM_STR);
            $query->bindParam("log_date", $dateTime, PDO::PARAM_STR);
            $query->execute();

        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }    
    
}