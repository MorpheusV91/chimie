<?php


if (empty($_GET['id'])) error(404);

require_once __DIR__ . '/../models/atome-molecule-model.php';

 $molecule = oneAtomeMolecule($_GET['id']);
 if (empty($molecule)) error(404);

require_once __DIR__ . '/../views/molecules/details-molecule.php';