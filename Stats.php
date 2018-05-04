<!DOCTYPE html PUBLIC>	
	<head>
		<title class="bg">Фан-сайт ФК М.Юнайтед</title>
		<link href="css/styles.css" type="text/css" rel="stylesheet" />
	</head>

	<body id = "top" >
			<div class="container">		
				<?php include ("include/menu.php");?>
				<div class="info">
						<?php include("LR8/show_adresses.php")?>
						<a href="LR8/send_stat.php">Отправить результаты администратору</a>
						<?php include ("include/footer.php");?>
				</div>
				<?php include ("include/scoreboard.php");?>			
			</div>
		</body>
</html>
