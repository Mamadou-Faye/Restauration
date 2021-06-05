<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=restaurant', 'root', '');
include "index.php";

?>

<section>
    <div class="container"><br/><br/>
        <div class="row">
            <div class="col-sm-3 col-xs-3"></div>
            <div class="col-sm-6 col-xs-6">
                <?php
                        
                    $mes_admin = $bdd->query('SELECT * FROM Administrateur');
                    if($mes_admin->rowCount() > 0){
                        while($ma = $mes_admin->fetch()){
                            ?>
                            <b id="controller">
                                <?= $ma['nom']; ?> | <?= $ma['email']; ?> | <?= $ma['password']; ?>
                            </b>
                            <a href="modifier.php?id=<?= $ma['idAdmin'] ?>" id="mes_actions">modifier</a><hr/>
                            <?php
                        }
                    }
                    
                ?>
            </div>
            <div class="col-sm-3 col-xs-3"></div>
        </div>
    </div>
</section>
<?php require "footer.php";?>