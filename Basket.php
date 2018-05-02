<!DOCTYPE html PUBLIC>	
	<head>
		<title class="bg">Фан-сайт ФК М.Юнайтед</title>
		<link href="css/styles.css" type="text/css" rel="stylesheet" />
	</head>

	<body id = "top" >
			<div class="container">		
				<?php include ("include/menu.php");?>
				<div class="info">
					<h2>Корзина товаров: </h2>
					<?php echo "<h3>У Вас в корзине ".$_SESSION['num']." товара(ов)</h3>" ?>
					<?php include("LR7/show_items.php")?>
					<form action="LR7/purchase.php" method="POST">
						<input type="submit" value="Оформить покупку" name="buy">
					</form>	
					<form action="LR7/clear_basket.php" method="POST">
						<input type="submit" value="Очистить корзину" name="clear">
					</form>	
				</div>
				<?php include ("include/scoreboard.php");?>		
			</div>
		</body>
</html>
