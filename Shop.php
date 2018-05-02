<!DOCTYPE html PUBLIC>	
	<head>
		<title class="bg">Фан-сайт ФК М.Юнайтед</title>
		<link href="css/styles.css" type="text/css" rel="stylesheet" />
	</head>

	<body id = "top" >
			<div class="container">		
				<?php include ("include/menu.php");?>
				<div class="info">
						<div class="logo_cont"><img src="images/banner.jpg" class="banner0"></div>
						<h1>Магазин</h1>
						<div class="shop">
							<div class="pair">
								<div class="item">
									<form action="LR7/add_to_basket.php" method="POST">
									<div class="name">Home kit 2016/2017</div>
									<img class="pic" src="images/shop/h17.jpg" >
									<div class="price">65$</div>
									<input type="hidden" name="cost" value="65$">
									<input type="hidden" name="name" value="Home kit 2016/2017">
									<input type="submit" name="add_item" value="Добавить в корзину">
									</form>
								</div>


								<div class="item">
									<form action="LR7/add_to_basket.php" method="POST">
									<div class="name">Home long kit 2016/2017</div>
									<img class="pic" src="images/shop/h17l.jpg" >
									<div class="price">75$</div>
									<input type="hidden" name="cost" value="75$">
									<input type="hidden" name="name" value="Home long kit 2016/2017">
									<input type="submit" name="add_item" value="Добавить в корзину">
									</form>
								</div>
							</div>

							<div class="pair">
								<div class="item">
									<form action="LR7/add_to_basket.php" method="POST">
									<div class="name">Away long kit 2016/2017</div>
									<img class="pic" src="images/shop/a17l.jpg" >
									<div class="price">55$</div>
									<input type="hidden" name="cost" value="55$">
									<input type="hidden" name="name" value="Away long kit 2016/2017">
									<input type="submit" name="add_item" value="Добавить в корзину">
									</form>
								</div>

								<div class="item">
									<form action="LR7/add_to_basket.php" method="POST">
									<div class="name">Keeper kit 2016/2017</div>
									<img class="pic" src="images/shop/h17k.jpg" >
									<div class="price">93$</div>
									<input type="hidden" name="cost" value="93$">
									<input type="hidden" name="name" value="Keeper kit 2016/2017">
									<input type="submit" name="add_item" value="Добавить в корзину">
									</form>
								</div>
							</div>
						</div>
						<a href="https://vk.com/manutdby"><img class="banner1" src="images/banner2.jpg" title="Фан-клуб МЮ в Беларуси вконтакте"></a>
						<?php include ("include/footer.php");?>
				</div>
				<?php include ("include/scoreboard.php");?>			
			</div>
		</body>
</html>
