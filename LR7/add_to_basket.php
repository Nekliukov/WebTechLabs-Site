<?php
    session_start();

    if ($_SESSION['num'] >= 10)
        $_SESSION['num'] = 0;
    else
        $_SESSION['num']++;
 
    // Добавляем товар в конец массива
    array_push($_SESSION['names'], $_POST['name']);
    array_push($_SESSION['costs'], $_POST['cost']);

    exit('<meta http-equiv="refresh" content="0; url=../Shop.php"/>');
?>