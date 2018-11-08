<!DOCTYPE html>
<html>
<head>
  <?php require_once('head.php'); ?>
</head>
<body>
  <?php include_once('./components/debuger.php') ?>
  <header>
    <nav class="navbar navbar-expand-lg" style="background-color: purple;">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" style="color: white; font-size: 20px;"  href="index.php">DiLeo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" style="color: white" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="calendrier.php">Calendrier</a>
            <a href="calendar.php"></a>
          </li>
          <?php if(isset($_SESSION['connected']) && $_SESSION['connected'] === true){ ?>   
            <li class="nav-item">
              <a class="nav-link" style="color: white" href="add_event.php">Ajouter un évènement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" style="color: lightgrey" href="logout.php">Deconnexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: lightgrey" data-toggle="collapse" role="button" href="#debuger">Debuger</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" style="color: white" href="login.php">Connexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: white" href="register.php">Inscription</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" style="color: lightgrey" data-toggle="collapse" role="button" href="#debuger">Debuger</a>
            </li>

          <?php } ?>

        </ul>
      </div>
    </nav>
  </header>
  <main class="container mt-5">