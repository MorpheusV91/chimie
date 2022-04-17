<?php
if (!empty($_SESSION['login']) && $_SESSION['login'] != 'admin') error(403);

require_once __DIR__ . '/../models/Molecule-model.php';

function supprimerMolecule()
{
        if (empty($_GET['csrf']) || !verificationToken($_GET['csrf'])) error(403);
        if (empty($_GET['id'])) error(404);

        deleteMolecule($_GET['id']);

        redirection('list-molecule');
}
