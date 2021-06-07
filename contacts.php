<?php
include "index.php";
?>
<section id="contacts" class="mesContacts">
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-sm-3 col-xs-3'></div>
            <div class='col-sm-6 col-xs-6'>
                <div id='mycarousel' class='carousel slide' data-ride='carousel'>
                    <ol class='carousel-indicators'>
                        <li data-target='#mycarousel' data-slide-to='0' class='active'></li>
                        <li data-target='#mycarousel' data-slide-to='1'></li>
                        <li data-target='#mycarousel' data-slide-to='2'></li>
                    </ol>
                    <div class='carousel-inner'>
                        <div class='item active'>
                            <img src='img/image13.jpg' alt='image13' style='width:100%; height:500px; margin:auto;'>
                        </div>
                        <div class='item'>
                            <img src='img/image14.jpg' alt='image14' style='width:100%; height:500px; margin:auto;'>
                        </div>
                        <div class='item'>
                            <img src='img/image15.jpg' alt='image15' style='width:100%; height:500px; margin:auto;'>
                        </div>
                    </div>
                    <a href='#mycarousel' class='left carousel-control' data-slide='prev'>
                        <span class='glyphicon glyphicon-chevron-left'></span>
                        <span class='sr-only'>Previous</span>
                    </a>
                    <a href='#mycarousel' class='right carousel-control' data-slide='next'>
                        <span class='glyphicon glyphicon-chevron-right'></span>
                        <span class='sr-only'>Next</span>
                    </a>
                </div>
            </div>
            <div class='col-sm-3 col-xs-3'>
                <section class="contact" id="contacts">
                    <h1>Contactez-Nous</h1>
                    <form class="form-contact" action="contact.php" method="post">
                        <p>
                            <input type="text" name="login" placeholder="Votre nom">
                        </p>
                        <p>
                            <input type="email" name="email" placeholder="Votre email">
                        </p>
                        <p>
                            <input type="text" name="telephone" placeholder="Votre numéro">
                        </p>
                        <p>
                            <textarea name="message" placeholder="Votre message"></textarea>
                        </p>
                        <span><input type="submit" name="btnSubmit" value="Envoyer"></span>
                    </form>
                    <?php if (isset($_GET['erreur'])) {
                        $erreur = $_GET['erreur'];?>
                        <font style="color: red; margin-top: 15px;"><?= $erreur; ?></font>
                        <?php
                    } ?>
                    <?php if (isset($_GET['msg'])) {
                        $msg = $_GET['msg'];?>
                        <font style="color: green; margin-top: 15px;"><?= $msg; ?></font>
                        <?php
                    } ?>
                </section>
            </div>
        </div>
    </div>
</section>
<?php require "footer.php";?>