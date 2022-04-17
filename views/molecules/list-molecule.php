<?php require_once __DIR__ . '/../parties/header.php'; ?>

<h1>Les molecules</h1>

<div class="row">
  <?php foreach ($molecule as $molecules) { ?>
    <div class="card col-4">
      <div class="card-body">
        <h4 class="card-title"><?= $molecules->nom ?></h4>
        <p class="card-text"><?= $molecules->formule ?></p>
        <p class="card-body">
          <a class="btn btn-info" href="index.php?route=details-molecule&id=<?= $molecules->id ?>">Details</a>
          <?php if (!empty($_SESSION['login']) && $_SESSION['login'] == 'admin') : ?>
            <a class="btn btn-warning text-light" href="index.php?route=update-molecule&id=<?= $molecules->id ?>">Modifier</a>
            <a class="btn btn-danger" onclick="return confirm('Etes-vous sûr de vouloir SUPPRIMER ?')" href="index.php?route=delete-molecule&id=<?= $molecules->id ?>&csrf=<?= creationToken() ?>">Supprimer</a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  <?php } ?>
</div>

<?php require_once __DIR__ . '/../parties/footer.php'; ?>