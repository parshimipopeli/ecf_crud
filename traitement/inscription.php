<?php
require_once '../include/connectBdd.php';
if (isset($_POST['submit'])){
    $req = ("INSERT INTO inscris (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password);");
    $password =  password_hash($_POST['password'] , PASSWORD_DEFAULT);
    $sth = $bdd->prepare($req);
    $sth->bindParam(':firstname', $_POST['firstname']);
    $sth->bindParam(':lastname', $_POST['lastname']);
    $sth->bindParam(':email', $_POST['email']);
    $sth->bindParam(':password', $password);
 $sth->execute();
var_dump($sth);
header('Location:../mon_app/infos.php');











}