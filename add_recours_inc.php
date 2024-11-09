<?php
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        require_once 'add_recoureCLass.php';
        $recours = new recours(); 
        $result = $recours->addRecours($_POST['id_student'], $_POST['module'], $_POST['nature'], $_POST['note_afficher'], $_POST['note_reel']);
        echo $result; 
    }
?>

