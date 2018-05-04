<?php
        $_SESSION['FIRST_VISIT'] = isset($_SESSION['FIRST_VISIT'])?1:0;
        $currip = $_SERVER['REMOTE_ADDR'];
        require_once 'connection.php';

        $link = mysqli_connect($host, $user, $password, $database)
        or die("Error " . mysqli_error($link));
    
        $queryopen = "SELECT * FROM IPs";
        $resultopen=mysqli_query($link,$queryopen)
            or die("Error ".mysqli_error($link));
        $rows = mysqli_num_rows($resultopen); // количество полученных строк
        $exist = false; 
        if($resultopen && ($_SESSION['FIRST_VISIT']==0)){
            for ($i = 0 ; $i < $rows ; ++$i){
                $row = mysqli_fetch_row($resultopen);
                for ($j = 1 ; $j < 2 ; ++$j)
                    if ($currip == $row[$j]){
                        $exist = true;
                        $sql="UPDATE `ips` SET `VISITS`=`VISITS`+1 WHERE `IP`= '$row[$j]'";
                        mysqli_query($link, $sql);
                        break;
                    }
           }
           if(!$exist){
                $queryadd ="INSERT INTO IPs VALUES(NULL,'$currip', 1)";
                if ($resultadd = mysqli_query($link, $queryadd) or      die("Error " . mysqli_error($link)));
           }
        }
?>