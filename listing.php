<?php
require_once "dbh.php";

class Listing extends dbh {
    public function list($table = "students") {
        $resultArray = array();
        $conn = parent::connect();
        
        if ($conn) {
            $query = "SELECT * FROM $table";
            $result = $conn->query($query);

            if ($result) {
                while ($item = $result->fetch(PDO::FETCH_ASSOC)) {
                    $resultArray[] = $item;
                }
                return $resultArray;
            } else {
                echo "Erreur dans la requête : " . $conn->errorInfo();
            }
        } else {
            echo "La connexion à la base de données a échoué.";
        }
    }
}

?>

