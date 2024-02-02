<?php
include('cnx.php');
function Ajouter($nom,$prenom,$datenaissance,$couleur,$nationalite,$genre,$matiere,$image,$password){
    if(require("cnx.php")){
        $sql = " INSERT INTO personne (nom,prenom,datenaissance,couleur,nationalite,genre,matiere,image,password) VALUES ('$nom','$prenom','$datenaissance', $couleur ,'$nationalite','$genre','$matiere','$image','$password')";
        $req = $cnx->prepare($sql);
        $req->execute();

    }

}

if (isset($_POST['enregistrer'])) {
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['datenaissance']) and !empty($_POST['couleur']) and !empty($_POST['nationalite']) and !empty($_POST['genre']) and !empty($_POST['matiere']) and !empty($_POST['image']) and !empty($_POST['password'])) {
        function filtrer($donnee)
        {
            $donnee = trim($donnee);
            $donnee = strip_tags($donnee);
            $donnee = stripslashes($donnee);
            return $donnee;
        }

        $nom = filtrer($_POST['nom']);
        $prenom = filtrer($_POST['prenom']);
        $email = filtrer($_POST['datenaissance']);
        $couleur = filtrer($_POST['couleur']);
        $nationalite = filtrer($_POST['nationalite']);
        $genre = filtrer($_POST['genre']);
        $matiere = filtrer($_POST['matiere']);
        $image = filtrer($_POST['image']);
        $password = filtrer($_POST['password']);

        try {
            Ajouter($nom,$prenom,$datenaissance,$couleur,$nationalite,$genre,$matiere,$image,$password);
        } catch (Exception $e) {
            echo 'erreur :  ' . $e->getMessage();
        }


    }





}



?>