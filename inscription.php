<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=restaurant', 'root', '');
include "index.php";
    $name = $email = $telephone = $errNom = $errEmail = "";
    // if($_SERVER['REQUEST_METHOD'] == "POST") {
    //     $name = test_input($_POST['nom']);
    //     $email = test_input($_POST['email']);
    //     $telephone = test_input($_POST['telephone']);
    // }

    // function test_input($data) {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }

    if(isset($_POST['submit'])){
        if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['telephone'])){
            
            $_SESSION['nom'] = $_POST['nom'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['telephone'] = $_POST['telephone'];

            $add_client = $bdd->prepare('INSERT INTO clients VALUE(NULL, :nom, :email, :telephone)');
            $add_client->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
            $add_client->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
            $add_client->bindValue(':telephone', $_POST['telephone'], PDO::PARAM_STR);
            $add_client->execute();
            header('location:a-propos.php');
        }else{
            header('location:connexion.php?msg3=Veillez saisir les champs correctement !');
        }
    }
    // if(empty($_POST['nom'])){
    //     $errNom = "Le nom est obligatoire !";
    // }else{
    //     $name = test_input($_POST['nom']);
    // }

    // if(empty($_POST['email'])){
    //     $errEmail = "L'email est obligatoire !";
    // }else{
    //     $email = test_input($_POST['email']);
    // }
?>
<section id="inscription" class="inscription"> 
    <div class='container-fluid'>
        <div class='row row-inscription'>
            <div class='col-sm-3 col-xs-3'></div>
            <div class='col-sm-6 col-xs-6'>
                <p><h2><em>Veillez remplir les champs suivants !</em></h2></p>
                <form id='formulaire' action='connexion.php' method='post'>
                    <div class='form-group'>
                        <input type='text' name='nom' id='nom' class='form-control' placeholder='Nom'>
                        <span class='error'><?php echo $errNom; ?></span>
                    </div><br/>
                    <div class='form-group'>
                        <input type='email' name='email' id='email' class='form-control' placeholder='email'>
                    </div><br/>
                    <div class='form-group'>
                        <input type='number' name='telephone' id='telephone' class='form-control' placeholder='Téléphone'>
                    </div><br/>
                    <div class='form-group'>
                        <input type='submit' name='submit' value='Envoyer'>
                    </div>
                    <p><em><?php
                        if(isset($_GET['msg3'])){
                            echo $_GET['msg3'];
                        }
                    ?></em></p>
                </form>
            </div>
            <div class='col-sm-3 col-xs-3'></div>
        </div>
    </div>
</section>
<?php require "footer.php";?>