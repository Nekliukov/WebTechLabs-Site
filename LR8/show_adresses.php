<?php
    require_once 'connection.php';

    $link = mysqli_connect($host, $user, $password, $database)
    or die("Error " . mysqli_error($link));

    $query = "SELECT * FROM IPs ORDER BY -VISITS";

    $result=mysqli_query($link,$query)
    or die("Error ".mysqli_error($link)); // запрос на выборку
    $rows = mysqli_num_rows($result); // количество полученных строк
        
    if($result){
         echo "<table class=\"games\"><tr><th>IP adresses</th><th>Visits</th></tr>";
         for ($i = 0 ; $i < $rows ; ++$i){
            $row = mysqli_fetch_row($result);
            echo "<tr>";
            for ($j = 1 ; $j < 3 ; ++$j)
                echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    mysqli_close($link);
?>