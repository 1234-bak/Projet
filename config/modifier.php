<?php
include('cnx.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les informations de l'utilisateur à modifier
    $sql = "SELECT * FROM personne WHERE id = :id";
    $req = $cnx->prepare($sql);
    $req->bindParam(':id', $id);
    $req->execute();
    $user = $req->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "Utilisateur non trouvé.";
        exit;
    }

    if (isset($_POST['modifier'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $datenaissance = $_POST['datenaissance'];
        $couleur = $_POST['couleur'];
        $nationalite = $_POST['nationalite'];
        $genre = $_POST['genre'];
        $matiere = $_POST['matiere'];
        $password = $_POST['password'];
        
        if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $dossier_images = 'C:/wamp64/www/ProjetClass/images/';
            $nom_fichier = basename($_FILES['image']['name']);
            $chemin_fichier = $dossier_images . $nom_fichier;
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $chemin_fichier)) {
                $image = $chemin_fichier;
            } else {
                echo 'Erreur lors du téléchargement du fichier.';
                exit;
            }
        } else {
            $image = $user['image'];
        }

        $sql = "UPDATE personne SET nom = :nom, prenom = :prenom, datenaissance = :datenaissance, couleur = :couleur, nationalite = :nationalite, genre = :genre, matiere = :matiere, image = :image, password = :password WHERE id = :id";
        $req = $cnx->prepare($sql);
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':datenaissance', $datenaissance);
        $req->bindParam(':couleur', $couleur);
        $req->bindParam(':nationalite', $nationalite);
        $req->bindParam(':genre', $genre);
        $req->bindParam(':matiere', $matiere);
        $req->bindParam(':image', $image);
        $req->bindParam(':password', $password);
        $req->bindParam(':id', $id);
        
        if ($req->execute()) {
            echo "Informations mises à jour avec succès.";
        } else {
            echo "Erreur lors de la mise à jour des informations.";
        }
    }
} else {
    echo "ID de l'utilisateur non spécifié.";
    exit;
}
?>