<?php
require_once '../include/connectBdd.php';

if (isset($_POST['submit'])) {

    $email = htmlspecialchars($_POST['email']);
    // var_dump($_POST);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo'email non valide';
    }
    } else {
        $mdp = htmlspecialchars($_POST['mdp']);
        $result = $bdd->query("SELECT * FROM inscris WHERE email = '$email'");
        var_dump($_POST);
    }
    if ($result->rowCount() == 0) {
        echo 'Email, non trouvé';
//        header('Location:../mon_app/inscription.php');


 }