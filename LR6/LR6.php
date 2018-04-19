<?php
	$host = '127.0.0.1'; // адрес сервера 
    $database = 'products'; // имя базы данных
    $user = 'root'; // имя пользователя
	$password = '1234'; // пароль
	
	ob_start();
	include("tmpl.html");
	$text = ob_get_clean();

	$link = mysqli_connect($host, $user, $password, $database)
    or die("Error " . mysqli_error($link));

    $query = "SELECT * FROM product";

    $result=mysqli_query($link,$query)
    or die("Error ".mysqli_error($link)); // запрос на выборку
    $rows = mysqli_num_rows($result); // количество полученных строк
	
	$prdcts='';
    if($result){
         $prdcts.="<table><tr><th>Product</th><th>Amount</th><th>Cost $</th></tr>";
         for ($i = 0 ; $i < $rows ; ++$i){
            $row = mysqli_fetch_row($result);
            $prdcts.="<tr>";
            for ($j = 1 ; $j <= 3 ; ++$j)
				$prdcts.="<td>$row[$j]</td>";
			$prdcts.="</tr>";
        }
        $prdcts.="</table></br>";
		mysqli_free_result($result);
		mysqli_close($link);
    }
	$text = preg_replace('/{AllProducts}/', $prdcts, $text);
	

	$newtext="";
	if (isset($_POST['button_find']))
	{
		$link = mysqli_connect($host, $user, $password, $database)
			or die("Error " . mysqli_error($link));
	
		$e = htmlentities(mysqli_real_escape_string($link, $_POST['element']));

		$queryopen = "SELECT * FROM product";
		$resultopen=mysqli_query($link,$queryopen)
        or die("Error ".mysqli_error($link)); // запрос на выборку
		$rows = mysqli_num_rows($resultopen); // количество полученных строк
		
		if($resultopen){
			$newtext.="<table><tr><th>Product</th><th>Amount</th><th>Cost $</th></tr>";
            for ($i = 0 ; $i < $rows ; ++$i){
               $row = mysqli_fetch_row($resultopen);
               for ($j = 1 ; $j < 2 ; ++$j){
                    if ($e == $row[$j]){
						$row1=$row[$j+1];
						$row2=$row[$j+2];
						$newtext.="<td>$row[$j]</td><td>$row1</td><td>$row2</td>";
						break;
					}
				}
			}
		}
		mysqli_close($link);
	}

	$text = preg_replace('/{FoundElement}/', $newtext, $text);
	echo $text;

	if (isset($_POST['button']))
	{
		$link = mysqli_connect($host, $user, $password, $database)
			or die("Error " . mysqli_error($link));
	
		$p = htmlentities(mysqli_real_escape_string($link, $_POST['product']));
		$a = htmlentities(mysqli_real_escape_string($link, $_POST['amount']));
		$c = htmlentities(mysqli_real_escape_string($link, $_POST['cost']));
		$queryadd = "INSERT INTO product VALUES(NULL,'$p','$a','$c')";
		
		$queryopen = "SELECT * FROM product";
        $resultopen=mysqli_query($link,$queryopen)
        	or die("Error ".mysqli_error($link)); // запрос на выборку
        $rows = mysqli_num_rows($resultopen); // количество полученных строк
		$exist = false; 
        if($resultopen){
            for ($i = 0 ; $i < $rows ; ++$i){
               $row = mysqli_fetch_row($resultopen);
               for ($j = 1 ; $j < 2 ; ++$j){
                   if ($p == $row[$j])
						$exist = true;
			   }
			}
        }
        if(!$exist)
        	if ($result = mysqli_query($link, $queryadd) or die("Error " . mysqli_error($link)))
		   
        if($result){echo "Product added";}
		mysqli_close($link);
	}
?>
