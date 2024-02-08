<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid #ccc;
            background-color: #fff;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
        }
        td {
            color: #555;
        }
        .actions {
            text-align: center;
        }
        .actions button {
            padding: 8px 16px;
            background-color: #ff5c5c;
            border: none;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .actions button:hover {
            background-color: #e63f3f;
        }
    </style>
</head>
<body>
    <?php
        include('config/supprimer.php');
    ?>
    <h1>Liste des Utilisateurs</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de Naissance</th>
            <th>Couleur</th>
            <th>Nationalité</th>
            <th>Genre</th>
            <th>Matière</th>
            <th colspan=2 >Actions</th>
        </tr>
        <?php
        include('config/cnx.php');

        $sql = "SELECT * FROM personne";
        $result = $cnx->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nom'] . "</td>";
            echo "<td>" . $row['prenom'] . "</td>";
            echo "<td>" . $row['datenaissance'] . "</td>";
            echo "<td>" . $row['couleur'] . "</td>";
            echo "<td>" . $row['nationalite'] . "</td>";
            echo "<td>" . $row['genre'] . "</td>";
            echo "<td>" . $row['matiere'] . "</td>";
            echo "<td><a href='form_modification.php?id=" . $row['id'] . "'>Modifier</a></td>";
            echo "<td>";
            echo "<form method='post'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
            echo "<input type='submit' name='supprimer' value='Supprimer'>";
            echo "</form>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
