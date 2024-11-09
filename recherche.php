<?php
require_once "dbh.php";
class Recherche extends dbh {
    public function searchStudents($searchTermNom, $searchTermPrenom, $searchTermEmail) {
        $searchNom = '%' . $searchTermNom . '%';
        $searchPrenom = '%' . $searchTermPrenom . '%';
        $searchEmail = '%' . $searchTermEmail . '%';

        $sql = "SELECT * FROM students WHERE nom LIKE :searchNom AND prenom LIKE :searchPrenom AND email LIKE :searchEmail";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':searchNom', $searchNom);
        $stmt->bindParam(':searchPrenom', $searchPrenom);
        $stmt->bindParam(':searchEmail', $searchEmail);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}

?>