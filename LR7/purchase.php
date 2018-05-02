<?php
    session_start();
    if (isset($_POST['buy'])){
        //process of items buying
        
        $_SESSION['num']=0;
        $_SESSION['names']=[];
        $_SESSION['costs']=[];

        exit('<meta http-equiv="refresh" content="0; url=../Basket.php"/>');
    }
?>