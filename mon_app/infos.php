<?php require_once '../include/connectBdd.php';
require_once '../include/header.php';


//$id = intval($_GET['id']);


$donnees = $bdd->query('SELECT * FROM inscris')->fetchAll(PDO::FETCH_ASSOC);
//var_dump($donnees);
?>


<div class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4"></h3>
    <div class="card-body">
        <div id="table-contact" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="#" class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
            <table id="table-contact" class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                <tr>
                    <th class="text-center">Nom</th>
                    <th class="text-center">Prenom</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($donnees
                as $elements){
                ?>
                <tr>
                    <td class="pt-3-half" contenteditable="true"><?= $elements['firstname'] ?></td>
                    <td class="pt-3-half" contenteditable="true"><?= $elements['lastname'] ?></td>

                    <td>
                        <a class="btn btn-success" type="button"
                           href="../traitement/infos.php?id=<?= $elements['id'] ?>">
                            Modifier
                        </a>
                    </td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>




