<?php
require "index.php";
require "header.php";
if(isset($_GET['del'])){
    $panier->del($_GET['del']);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ma commande</title>
    </head>
    <body><br/><br/>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-3">
                    <p><a href="javascript:history.back()"><em>retour au menu</em></a></p>
                </div>
                <div class="col-sm-3 col-xs-3">
                    <p style="font-weight:bold;">TOTAL DE MA COMMANDE : <mark><span class="total"><?= number_format($panier->total(), 2, ',',' '); ?></span></mark></p>
                </div>
                <div class="col-sm-3 col-xs-3"></div>
            </div><br/><br/>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <table class="table border ">
                        <tr>
                            <th>Mon plat</th>
                            <th>Nom</th>
                            <th>prix</th>
                            <th>quantité</th>
                            <th>subtotale</th>
                            <th>supprimer</th>
                        </tr>
                        <?php
                            $mesId = array_keys($_SESSION['panier']);
                            if(empty($mesId)){
                                $monMenu = array();
                            }else{
                                $monMenu = $DB->query('SELECT * FROM menu WHERE numMenu IN ('.implode(',',$mesId).')');
                            }
                        ?>
                        <?php foreach ($monMenu as $menu): ?>
                        <tr>
                            <td><img src='img/<?= $menu->numMenu;?>.jpg' alt='image1' style="width:100px; height:100px;"></td>
                            <td><span class="name"><?= $menu->nom;?></span></td>
                            <td><span class="price"><?= number_format($menu->prix, 2, ',', ' ');?></span></td>
                            <td><span class="quantity"><?= $_SESSION['panier'][$menu->numMenu] ?></span></td>
                            <td><span class="subtotale"><?= number_format($menu->prix * 1.17, 2, ',', ' ');?></span></td>
                            <td>
                            <span class="action">
                                <a class="del" href="sama.menu.php?del=<?= $menu->numMenu; ?>"><img src="img/del.png"></a>
                            </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
require "footer.php";
?>