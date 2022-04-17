<?php require_once __DIR__ . '/../parties/header.php'; ?>

<h1>Modifier une molecule</h1>


<div class="container">
    <form method="post">
        <?php if (!empty($errors)) erreursFormulaire($errors); ?>
        <input type="hidden" name="csrf" value="<?= creationToken() ?>">

        <div class="form-group row">
            <label for="nom" class="col-sm-1-12 col-form-label">Nom</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required value="<?= $_POST['nom'] ?? $molecule->nom ?? '' ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="formule" class="col-sm-1-12 col-form-label">Formule</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" name="formule" id="formule" placeholder="Formule" required value="<?= $_POST['formule'] ?? $molecule->formule ?? '' ?>">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </div>
    </form>
</div>

<?php require_once __DIR__ . '/../parties/footer.php'; ?>