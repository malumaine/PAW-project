<?php
require_once 'dbh.php';

class Student extends Dbh {
    public function addStudent($nom, $prenom, $email, $groupe) {
        $sql = "INSERT INTO students (nom, prenom, email, groupe) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute([$nom, $prenom, $email, $groupe])) {
            // Gestion des erreurs
            return "Erreur lors de l'ajout de l'étudiant";
        } else {
            return "Étudiant ajouté avec succès";
        }
    }
}
?>

