<?php

// - Retrieve (All)

function allmolecules(): array {

  $db = connexion();


  
  $resultat = $db->query('SELECT*FROM molecule');


  return $resultat->fetchAll(PDO::FETCH_OBJ);
   

}
// - Retrieve (One)


function oneMolecule(int $id): object {

  $db = connexion();


    $requete = 'SELECT*FROM molecule WHERE id = ?';
    $stmt = $db->prepare($requete);
    $stmt->bindParam(1,$id);
    $stmt->execute();
  
    return $stmt->fetch(PDO::FETCH_OBJ);

}
// - Delete


function deleteMolecule(int $id) {

  $db = connexion();


    $requete = 'DELETE FROM molecule WHERE id = ?';
    $stmt = $db->prepare($requete);
    $stmt->bindParam(1,$id);
    $stmt->execute();
   
    if ($stmt->rowCount() == 0) echo(error(404));
}
// - Create

function createMolecule(string $nom, string $formule) {
  
  $nom = htmlspecialchars($nom);
  $formule = htmlspecialchars($formule);

  $db = connexion();

  
    $requete = "INSERT INTO molecule VALUES (NULL,?,?)";
    $stmt = $db->prepare($requete);
    $stmt->bindParam(1,$nom);
    $stmt->bindParam(2,$formule);
    $stmt->execute();

}
// - Update


function modifierMolecule(int $id, string $nom, string $formule) {

  $nom = htmlspecialchars($nom);
  $formule = htmlspecialchars($formule);

  $db = connexion();


    $requete = "UPDATE molecule SET  nom = ?, formule = ? WHERE id = ?";
    $stmt = $db->prepare($requete);
    $stmt->bindParam(1,$nom);
    $stmt->bindParam(2,$formule);
    $stmt->bindParam(3,$id);
    $stmt->execute();

}