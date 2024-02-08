<?php
include('cnx.php');

function supprimerUtilisateur($id)
{
    global $cnx;
    $sql = "DELETE FROM personne WHERE id = :id";
    $stmt = $cnx->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    supprimerUtilisateur($id);
    echo "Utilisateur supprimé avec succès.";
} else {
    echo "Aucun identifiant d'utilisateur fourni.";
}
?>
