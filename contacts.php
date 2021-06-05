<?php
include "index.php";
?>
<section id="contacts">
    <div class='container-fluid'>
        <div class='row'>
            <h1 id='contact'><em>Contactez Nous <a href='#'>ici </a>!</em></h1>
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
                <div id='slide_contact'>
                    <p style='font-size:40px; font-family:arial'>Mes contacts</p>
                    <p style='font-size:20px; font-family:arial'>
                    <span class='glyphicon glyphicon-home'></span>:Mbour Saly<br/>
                    <span class='glyphicon glyphicon-phone'></span>:773827653<br/>
                    <span class='glyphicon glyphicon-earphone'></span>:338314217<br/>
                    <span class='glyphicon glyphicon-envelope'></span>:fayem7409@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require "footer.php";?>