<?php 
session_start();
require("db.php");

$error = "";

//si le formulaire est soumis...
if(isset($_POST)) {
    $email     = $_POST["email"];
    $password  = md5($_POST["password"]);

    //on va chercher le user en bdd en fonction de son email
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $user= $stmt->fetch();

    //si on a trouvé un résultat
    if(!empty($user)) {

        //on vérifie son mot de passe
        $passwordIsOk = ($password == $user['password'] ? true : false);

        // si le mdp est bon...
        if($passwordIsOk) {
            //on connecte l'user 
            session_start();
            $_SESSION['connected'] = true;
            $_SESSION['user'] = $user;
            header('Location: ../');   

        }
        else{
            $error= "Mauvais identifiants !";
        }
    }
    else {
        $error="Mauvais identifiants !";
    }
}



?>


