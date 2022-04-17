<nav class="nav my-2 py-2 justify-content-center">
      <a class="nav-link" href="index.php?route=home">Accueil</a>
      <a class="nav-link" href="index.php?route=list-molecule">Afficher toutes les molécules</a>
      
      <?php if (!empty($_SESSION['login']) && $_SESSION['login'] == 'admin') : ?>
      <a class="nav-link" href="index.php?route=ajouter-molecule">Créer une molécule</a>
      <?php endif; ?>
      <?php if (empty($_SESSION['login'])) : ?>
            <a class="nav-link" href="index.php?route=connexion-molecule">Connexion</a>
      <?php else : ?>
            <a class="nav-link" href="index.php?route=deconnexion-molecule">Deconnexion</a>
      <?php endif; ?>
</nav>