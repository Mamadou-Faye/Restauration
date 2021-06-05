<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=restaurant', 'root', '');

require "index.php";
$name = " ";
$login = "fayem7409@gmail.com";
$mdp = "fayem@20";
if(isset($_POST['submit'])){
    if(!empty($_POST['login']) AND !empty($_POST['pwd']) AND !empty($_POST['nom'])){
        if(isset($_POST['nom']) == $name && isset($_POST['login']) == $login && isset($_POST['pwd']) == $mdp){
        $_SESSION['nom'] = $name;
        $_SESSION['login'] = $login;
        $_SESSION['pwd'] = $mdp;
            header('location:nos-clients.php');
        }else{
            header('location:login.php?msg1=login ou mot de passe incorrect !');
        }
    }else{
        header('location:login.php?msg6=Veillez remplir tous les champs !');
    }
}
    
?>                
    <!-- <div class="container-fluid">
        <footer>Copyright@UVS 2019  mamadou.faye18@uvs.edu.sn Tel: 773827653</footer>
    </div> -->
<section id="connexion" class="login-connect">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-xs-4"></div>
            <div class="col-sm-4 col-xs-4">
                <h2 id="titre_login"><em>Veillez remplir ce formulaire !</em></h2>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="email" name="login" id="email" class="form-control" placeholder="Votre email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pwd" id="mdp" class="form-control" placeholder="Votre mot de passe">
                    </div>
                    <div class="input-control">
                        <input type="submit" name="submit" value="Envoyer">
                    </div>
                </form>
                <?php if(isset($_GET['msg1'])){?>
                <p class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                <em>
                   <?php echo $_GET['msg1'];
                }?>

                <?php if(isset($_GET['msg6'])){?>
                    <p class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                    <em>
                    <?php echo $_GET['msg6'];
                }
                ?></em></p>
            </div>
            <div class="col-sm-4 col-xs-4"></div>
        </div>
    </div>
</section>
<?php require "footer.php";?>