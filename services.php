<?php include "index.php";?>
<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=restaurant', 'root', '');
if(isset($_POST['submit'])){
    if(!empty($_POST['person']) AND !empty($_POST['jour']) AND !empty($_POST['heure'])){
        $person = $_POST['person'];
        $jour = $_POST['jour'];
        $heure = $_POST['heure'];
        $add_info = $bdd->prepare('INSERT INTO reservation VALUES(NULL, :nombre_place, :dateReserve, :heureReserve, :commentaire)');
        $add_info->bindValue(':nombre_place', $person, PDO::PARAM_STR);
        $add_info->bindValue(':dateReserve', $jour, PDO::PARAM_STR);
        $add_info->bindValue(':heureReserve', $heure, PDO::PARAM_STR);
        $add_info->bindValue(':commentaire', $_POST['message'], PDO::PARAM_STR);
        $isOk_info = $add_info->execute();
        if($isOk_info){
            header('location:services.php?msg3=Merci votre réservation a été bien prise en compte !');
        }else{
            header('location:services.php?msg4=échec d\'insertion !');
        }
    }else{
        header('location:services.php?msg5=Veillez remplir tous les champs !');
    }
}

?>
<section id="services" class="myServices">
    <div class='container-fluid'>
        <div class='row row-sevices'>
            <div class='col-sm-4 col-xs-4'><br/>
                <p><img id='reserve' class='img-thumbnail' src='img/reserver.jpg' alt='ma_réservation'/></p>
            </div>
            <div class='col-sm-4 col-xs-4'>
                <header id='mon_header_reserve'>
                    <h1>A votre service</h1>
                </header>
                <div class="form-reservation">
                    <form action="" method="post" class="myform">
                        <fieldset class="myfields">
                            <legend class="mylegend">Reservation en ligne</legend>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
                                <input type='number' id='clients' name='person' class='form-control' placeholder='nombre de places (seulement en chiffre)'>
                            </div><br/>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-sound-5-1'></i></span>
                                <input type='date' id='jour' name='jour' class='form-control'>
                            </div><br/>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-time'></i></span>
                                <input type='time' id='heure' name='heure' class='form-control'>
                            </div><br/>
                            <div class='input-group'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-cutlery'></i></span>
                                <textarea name='message' class='form-control' rows='10' cols='30'>
                                </textarea>
                            </div>
                        </fieldset><br/>
                        <div class='input-group'>
                            <input class="btnSubmitEnv" type="submit" name="submit" value="envoyer">
                        </div>
                    </form>
                    <?php if(isset($_GET['msg4'])){?>
                    <p class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                    <em>
                    <?php echo $_GET['msg4'];
                    }?>

                    <?php if(isset($_GET['msg5'])){?>
                        <p class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                        <em>
                        <?php echo $_GET['msg5'];
                    }
                    ?></em></p>
                </div>
            </div>
            <div class='col-sm-4 col-xs-4'>
                <div class="text-services">
                    Notre restaurant peut accueillir jusqu'à 150 personnes.
                    Les locaux sont également adaptés pour des événements de toutes sortes.
                    En été, nous vous chouchoutons sur notre grande terrasse extérieure.
                </div>

                <div class="livraison-paiement">
                    <div class="livraison">
                        <img class="img-livraison" src="img/velo1.jpg">
                        <span>Livraison gratuite</span>
                    </div>
                    <div class="paiement">
                        <img class="img-paiement" src="img/img10.jpg">
                        <span>Paiement en ligne</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require "footer.php";?>