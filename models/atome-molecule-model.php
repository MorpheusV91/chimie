<?php

function oneAtomeMolecule(int $id): array
{

    $db = connexion();


    $requete = 'SELECT 
          qtte_atome,
          molecule.nom,
          molecule.formule,
          atome.symbole
          FROM `atome_molecule` 
              JOIN atome ON atome_molecule.id_atome = atome.id
              JOIN molecule ON atome_molecule.id_molecule = molecule.id WHERE molecule.id = ?';

    $stmt = $db->prepare($requete);
    $stmt->bindParam(1, $id);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
