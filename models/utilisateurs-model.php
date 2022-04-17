<?php

function oneUtilisateur(string $pseudo) {

  $db = connexion();

    $requete = 'SELECT * FROM utilisateurs WHERE pseudo = ?';
    $stmt = $db->prepare($requete);
    $stmt->bindParam(1,$pseudo);
    $stmt->execute();
  
    return $stmt->fetch(PDO::FETCH_OBJ);
}