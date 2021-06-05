<?php
require "index.php";
require "header.php";
?>
<br/><br/>
<section id="menuNourriture">
    <div class='container'>
        <div class='row'>
            <p><a class="commande" href="sama.menu.php">voir ma commande</a></p>
            <?php $monMenu = $DB->query('SELECT * FROM menu WHERE numMenu < 4');?> 
            <?php foreach($monMenu as $menu): ?>
            <div class='col-sm-4 col-xs-4'>
                <div class='thumbnail'>
                    <a class="addmenu" href='addmenu.php?id=<?= $menu->numMenu;?>'>
                        <img id='page1' src='img/<?= $menu->numMenu;?>.jpg' alt='image1'>
                        <div class='caption'>
                            <?= $menu->nom;?>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>