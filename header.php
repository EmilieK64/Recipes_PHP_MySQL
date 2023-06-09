<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>


<?php
    include_once('config/mysql.php');
    include_once('variables.php');
    include_once('functions.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo $rootProject . '/home.php'; ?>">Site de Recettes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo($rootUrl). '/Application_PHP_MySQL/home.php'; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $rootProject . '/contact.php'; ?>">Contact</a>
        </li>
        <?php if(isset($loggedUser)) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $rootProject . '/recipes/create.php'; ?>">Ajoutez une recette !</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>