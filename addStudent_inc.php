<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once 'addStudentClass.php';

    $student = new Student();
    $result = $student->addStudent($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['groupe']);

    echo $result;
}
?>
