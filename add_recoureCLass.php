<?php
require_once 'dbh.php'; 
class recours extends dbh {
    public function addRecours($id_student, $module, $nature, $note_affiche, $note_reel) {
        try {
            
            $sql = "INSERT INTO recours (id_student, module, nature, note_affiche, note_reel) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);

            
            if ($stmt->execute([$id_student, $module, $nature, $note_affiche, $note_reel])) {
                return "recours ajouté avec succès";
            } else {
                return "Erreur lors de l'ajout de l'étudiant : " . $stmt->errorInfo()[2]; 
            }
        } catch (PDOException $e) {
            return "Erreur PDO : " . $e->getMessage();
        }
    }
}
?>
