<?php
require_once '../include/connectBdd.php';
$id = ($_GET['id']);
$reponse = $bdd->query('SELECT * FROM inscris WHERE id = ' . $id);
$results =$reponse->fetch();
var_dump($results);

if (isset($_POST['update'])) {

    $id = ($_GET['id']);

    $req = ("UPDATE inscris SET firstname = :firstname, lastname = :lastname WhERE id = :id");
    $name = htmlspecialchars($_POST['firstname']);
    $last = htmlspecialchars($_POST['lastname']);

    $result = $bdd->prepare($req);
   $donnees =  $result->execute([':firstname' => $name, ':lastname' => $last , ':id' => $id]);
   header('Location:../mon_app/infos.php');
}
?>
<div class="col-6 d-flex justify-content-center">
    <form id="" action="#" method="POST" class="mx-2">
        <div class="d-md-flex">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" value="<?= $results['firstname'] ?>"class="form-control" id="" name="firstname" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="">Prénom</label>
                    <input type="text" value="<?= $results['lastname'] ?>" class="form-control" id="" name="lastname" placeholder="Prénom">
                </div>



        <div class=" mx-2 d-flex justify-content-end">

            <button id="btn" name="update" type="submit" class="btn text-dark font-weight-bold mb-5">Modifier</button>
        </div>
    </form>

