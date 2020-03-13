<?php
require_once '../include/connectBdd.php';
require_once '../include/header.php';



?>


    <form method="post" action="../traitement/inscription.php">
        <div class="form-group">
            <label for="email">Nom</label>
            <input type="text" name="firstname" class="form-control" placeholder="Enter votre nom" id="">
        </div>
        <div class="form-group">
            <label for="pwd">Prénom</label>
            <input type="text" name="lastname" class="form-control" placeholder="Enter veoter prénom" id="">
        </div>
        <div class="form-group">
            <label for="pwd">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter vatre mail" id="">
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" class="form-control" placeholder="Enter mot de passe" id="">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>


<?php
require_once '../include/footer.php';