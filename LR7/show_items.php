<?php
	if(!isset($_SESSION['names'])){
		$_SESSION['names'] = [];
		$_SESSION['costs'] = [];
    }
    $sum = 0;
	echo "<table class=\"games\"><tr>";
	echo "<th>Имя товара</th><th> Цена</th>";
	for($i=0; $i < count($_SESSION['names']); $i++){
		echo "<tr><td>".$_SESSION['names'][$i]."</td>";
        echo "<td>".$_SESSION['costs'][$i]."</td></tr>";
        $sum+=$_SESSION['costs'][$i];
    }
    echo "<tr><td><b>К оплате: </b></td><td><b>$sum$</b></td></tr>";	
    echo "</table><hr>";
					
?>