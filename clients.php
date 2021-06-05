<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=restaurant', 'root', '');
require "index.php";
?>

<section>
    <div class="container"><br/><br/>
        <div class="row">
            <div class="col-sm-3 col-xs-3"></div>
            <div class="col-sm-6 col-xs-6">
                <?php
                        
                    $mes_clients = $bdd->query('SELECT * FROM clients');
                    if($mes_clients->rowCount() > 0){
                        while($mc = $mes_clients->fetch()){
                            ?>
                            <b id="controller">
                                <?= $mc['nom']; ?> - <?= $mc['email']; ?> - <?= $mc['telephone']; ?>
                            </b>
                            <a href="supprimer.php?id=<?= $mc['idClient']; ?>" id="mes_actions">supprimer</a><hr/>

                            <?php
                        }
                    }else{
                        echo "Membre indisponible !";
                    }
                    
                ?>
            </div>
            <div class="col-sm-3 col-xs-3"></div>
        </div>
    </div>
</section>
<?php require "footer.php";?>