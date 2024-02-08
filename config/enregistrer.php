<?php
include('cnx.php');

function Ajouter($nom, $prenom, $datenaissance, $couleur, $nationalite, $genre, $matiere, $image, $password)
{
    if(require("cnx.php")){
        $sql = "INSERT INTO personne (nom, prenom, datenaissance, couleur, nationalite, genre, matiere, image, password) VALUES ('$nom', '$prenom', '$datenaissance', '$couleur', '$nationalite', '$genre', '$matiere', '$image', '$password')";
        $req = $cnx->prepare($sql);
        $req->execute();
    }
}

if (isset($_POST['enregistrer'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['datenaissance']) && !empty($_POST['couleur']) && !empty($_POST['nationalite']) && !empty($_POST['genre']) && !empty($_POST['matiere']) && !empty($_FILES['image']['name']) && !empty($_POST['password'])) {
        
        function filtrer($donnee)
        {
            $donnee = trim($donnee);
            $donnee = strip_tags($donnee);
            $donnee = stripslashes($donnee);
            return $donnee;
        }

        $nom = filtrer($_POST['nom']);
        $prenom = filtrer($_POST['prenom']);
        $datenaissance = filtrer($_POST['datenaissance']);
        $couleur = filtrer($_POST['couleur']);
        $nationalite = filtrer($_POST['nationalite']);
        $genre = filtrer($_POST['genre']);
        $matiere = filtrer($_POST['matiere']);
        $password = filtrer($_POST['password']);
        
        if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $dossier_images = 'C:/wamp64/www/ProjetClass/images/';
            $nom_fichier = basename($_FILES['image']['name']);
            $chemin_fichier = $dossier_images . $nom_fichier;
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $chemin_fichier)) {
                $image = $chemin_fichier;
                
                try {
                    Ajouter($nom, $prenom, $datenaissance, $couleur, $nationalite, $genre, $matiere, $image, $password);
                    echo "Données insérées avec succès.";
                } catch (Exception $e) {
                    echo 'Erreur : ' . $e->getMessage();
                }
            } else {
                echo 'Erreur lors du téléchargement du fichier.';
            }
        } else {
            echo 'Veuillez sélectionner un fichier image.';
        }
    }
}
?>
