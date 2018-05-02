<?php
    require_once 'LR5.html';
    require_once 'connection.php'; // подключаем скрипт
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Error " . mysqli_error($link));

    $query = "SELECT * FROM email";

    $result=mysqli_query($link,$query)
    or die("Error ".mysqli_error($link)); // запрос на выборку
    $rows = mysqli_num_rows($result); // количество полученных строк
        
    if($result){
         echo "<table><tr><th>E-mails</th></tr>";
         for ($i = 0 ; $i < $rows ; ++$i){
            $row = mysqli_fetch_row($result);
            echo "<tr>";
            for ($j = 1 ; $j < 2 ; ++$j)
                echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    mysqli_close($link);
?>