<!DOCTYPE html>
<html>
<head>
  <?php require_once('head.php'); ?>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>

          <?php
        //pas connecté
        if (empty($_SESSION ['member'])) {
          echo "Vous n'êtes pas connecté";
        }
        ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Inscription</a>
          </li>

          <?php

        else{
          echo "Vous êtes connecté en tant que" . $_SESSION ['user']['last_name'];
        }
        ?>
          <li class="nav-item">
            <a class="nav-link" href="add_event.php">Ajouter un évènement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/logout.php">Deconnexion</a>
          </li>




        </ul>
      </div>
    </nav>
  </header>
  <main class="container mt-5">