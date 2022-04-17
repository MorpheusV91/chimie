<?php require_once __DIR__ . '/../parties/header.php'; ?>

<h1>Ajouter une molécule</h1>


<div class="container">
    <form method="post">
        <?php if (!empty($errors)) erreursFormulaire($errors); ?>
        <input type="hidden" name="csrf" value="<?= creationToken() ?>">

        <div class="form-group row">
            <label for="nom" class="col-sm-1-12 col-form-label">Nom :</label>
            <select class="form-control" name="nom" id="nom">
                <?php foreach ($noms as $n ) : ?>
                    <option value="<?= $n->nom ?>"><?= $n->nom ?></option>
                <?php endforeach; ?>    
            </select>
        </div>

        <div class="form-group row">
            <label for="formule" class="col-sm-1-12 col-form-label">Formule :</label>
            <select class="form-control" name="formule" id="formule">
                <?php foreach ($formules as $f ) : ?>
                    <option value="<?= $f->formule ?>"><?= $f->formule ?></option>
                <?php endforeach; ?>    
            </select>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </form>
</div>


<?php require_once __DIR__ . '/../parties/footer.php'; ?>