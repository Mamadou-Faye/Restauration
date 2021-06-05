<?php

    session_start();
    session_unset();
    $deconn = session_destroy();
    if($deconn){
        header('location:login.php?msg2=Vous êtes déconnecté ! veillez vous reconnecter !');
    }

?>