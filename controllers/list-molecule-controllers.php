<?php 

require_once __DIR__ . '/../models/Molecule-model.php';

        $molecule = allmolecules();
        if (empty($molecule)) error(404);

require_once __DIR__ . '/../views/molecules/list-molecule.php';