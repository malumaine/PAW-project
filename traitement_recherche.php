
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Résultats de la recherche</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Résultats de la recherche</h1>
    <?php
    require_once 'recherche.php'; // Inclure votre classe Recherche

    $recherche = new Recherche();

    // Supposons que vous avez récupéré les termes de recherche depuis une requête GET
    $searchTermNom = $_GET['nom'] ?? '';
    $searchTermPrenom = $_GET['prenom'] ?? '';
    $searchTermEmail = $_GET['email'] ?? '';

    // Utilisation de la méthode searchStudents pour obtenir les étudiants correspondants
    $results = $recherche->searchStudents($searchTermNom, $searchTermPrenom, $searchTermEmail);

    // Affichage des résultats de la recherche dans un tableau
    if (!empty($results)) {
        echo "<table border='1'>";
        echo "<tr><th>Nom</th><th>Prénom</th><th>Email</th></tr>";
        foreach ($results as $student) {
            echo "<tr>";
            echo "<td>" . $student['nom'] . "</td>";
            echo "<td>" . $student['prenom'] . "</td>";
            echo "<td>" . $student['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Aucun résultat trouvé</p>";
    }
    ?>

</body>
</html>
