<?php require_once __DIR__ . '/../parties/header.php'; ?>

<h1>Details de la molécule</h1>

<div class="row">
    <div class="col-8">
        <dl>
            <dt>Nom :</dt>
            <dd><?= $molecule [0]->nom ?></dd>
            <dt>Formule :</dt>
            <dd><?= $molecule [0]->formule ?></dd>
            <?php foreach ($molecule as $m) { ?>
             
            <dt>Quantité :</dt>
            <dd><?= $m->qtte_atome ?></dd>
            <dt>symbole :</dt>
            <dd><?= $m->symbole ?></dd> 

            <?php } ?>   
        </dl>
    </div>

<?php require_once __DIR__ . '/../parties/footer.php'; ?>