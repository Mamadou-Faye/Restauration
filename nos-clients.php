<?php require "index.php"; ?>
<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=restaurant', 'root', '');
if(!$_SESSION['pwd']){
    header('location:login.php');
}
   
?>

<section id="clients" style="padding-top: 10em;">
    <h1><em>Bienvenue à la page d'administration du site !</em></h1>
    <br/>
    <a href='deconnexion.php'>Déconnexion</a>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-xs-4"></div>
            <div class="col-sm-4 col-xs-4">
                <h3><em><a href="clients.php">Accéder à mes clients</a></em></h3>
                <h3><em><a href="Admin.php">Accéder à mes membres</a></em></h3>
            </div>
            <div class="col-sm-4 col-xs-4"></div>
        </div>
    </div>
</section>
<?php require "footer.php";?>