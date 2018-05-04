<?php
    require_once 'connection.php'; // подключаем скрипт
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Error " . mysqli_error($link));

    $text="User stats according to IP:\n";
    $query = "SELECT * FROM IPs";

    $result=mysqli_query($link,$query)
    or die("Error ".mysqli_error($link)); // запрос на выборку
    $rows = mysqli_num_rows($result); // количество полученных строк
        
    if($result){
         for ($i = 0 ; $i < $rows ; ++$i){
            $row = mysqli_fetch_row($result);
            for ($j = 1 ; $j < 3 ; ++$j)
                $text.=$row[$j].="\t";
            $text.="\n";
        }
        mysqli_free_result($result);
    }
    mysqli_close($link);


    mail("roman.nekliukov@gmail.com", "The stat", $text,
     "From: nekroman36@gmail.com \r\n"
    ."X-Mailer: PHP/" . phpversion());

    exit('<meta http-equiv="refresh" content="0; url=../Stats.php"/>');
?>