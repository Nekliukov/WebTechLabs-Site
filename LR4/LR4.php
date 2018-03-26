<?php
    header('Content-Type: text/html; charset=utf-8');
    //Findig of first words in sentenses
    $pattern='/(^|((\!|\?|\.)\s*))([A-ZА-ЯЁ][a-zа-яё]*)/';   
    $_POST['text']=preg_replace($pattern,'$1<u>$4</u>', $_POST['text']);

    //Another words starting from UpperCase char
    $pattern='/(\s)([A-ZА-ЯЁ][a-zа-яёA-ZА-ЯЁ|-]*)/';   
    $_POST['text'] = preg_replace($pattern,'$1<span style="background:red">$0</span>', $_POST['text']);
    echo ($_POST['text']);

    require_once('LR4.html');
?>