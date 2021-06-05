<?php
require "index.php";
require "header.php";
?>
<br/><br/>
<section id="boisson">
    <div class='container'>
        <div class='row'>
            <p><a href="sama.menu.php">voir ma commande</a></p>
            <?php $monMenu = $DB->query('SELECT * FROM menu WHERE numMenu > 15');?> 
            <?php foreach($monMenu as $menu): ?>
            <div class='col-sm-4 col-xs-4'>
                <div class='thumbnail'>
                    <a href='addmenu.php?id=<?= $menu->numMenu;?>'>
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
<?php require "footer.php"; ?>