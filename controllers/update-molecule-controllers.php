<?php
if (!empty($_SESSION['login']) && $_SESSION['login'] != 'admin') error(403);

require_once __DIR__ . '/../models/Molecule-model.php';

function modifier()
{
    
    if (!empty($_POST)) {
        
        if (empty($_POST['csrf']) || !verificationToken($_POST['csrf'])) error(403);
        $errors = [];

        if (empty($_POST['nom'])) $errors[] = 'Le nom est requis.';
        if (empty($_POST['formule'])) $errors[] = 'La formule est requis.';
        

        if (empty($errors)) {
            if (empty($_GET['id'])) error(404);
            modifierMolecule($_GET['id'], $_POST['nom'], $_POST['formule']);

            redirection('list-molecule');
        }
    }
    $molecule = oneMolecule($_GET['id']);
    if (empty($molecule)) error(404);

    require_once __DIR__ . '/../views/molecules/update-molecule.php';
}
