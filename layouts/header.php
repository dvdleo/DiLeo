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

                        <a href="modele_calendrier.php">  
                            <li class="nav-item">
                                <a class="nav-link" href="add_event.php">Calendrier</a>  
                            </li>
                        </a> 

                        <?php if(isset($_SESSION['connected']) && $_SESSION['connected'] === true){ ?>   

                        <li class="nav-item">
                            <a class="nav-link" href="add_event.php">Ajouter un évènement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="php/logout.php">Deconnexion</a>
                        </li>

                        <?php } else { ?>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Inscription</a>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
            </nav>
        </header>
        <main class="container mt-5">