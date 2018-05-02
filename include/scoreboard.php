<div class="scoreboard">
					<div class="table">
						<h2 class="sc_head">Таблица АПЛ (топ 5)</h2>
						<ol>
							<li>Манчестер Сити</li>
							<li>Манчестер Юнайтед</li>
							<li>Ливерпуль</li>
							<li>Челси</li>
							<li>Арсенал</li>
							<li>Бернли</li>
							<li>Лестер Сити</li>
							<li>Эвертон</li>
							<li>Борнмут</li>
							<li>Тоттенхем</li>
							<a href="https://www.google.by/search?q=%D1%82%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0+%D0%B0%D0%BF%D0%BB&ie=utf-8&oe=utf-8&gws_rd=cr&dcr=0&ei=pJ2AWrWoPIHksgHZ1Zj4Dg#gws_rd=cr&sie=lg;/g/11c74zg7g7;2;/m/02_tc;st;fp;1">Показать полностью</a>
						</ol>
					</div>
					<?php
						if(!isset($_SESSION['num']))
							$_SESSION['num'] = 0;
						echo "<div class=\"basket\">";
						echo "<h3>Корзина</h3>";
						echo "<a href=\"Basket.php\">В корзине ".$_SESSION['num']." элементов</a>";
						echo "</div>";
					?>
					<div class="nextmatch">
						<hr/><p>Следующий матч</p>
						<p class="date">Лига чемпионов 1/8 финала</br>Cевилья - М. Юнайтед, 21:45(МСК)</p>
						<img class="opponent" src="images/sevilla-b.png">
						</br><input type="radio" value="manu" name="genre" checked="checked"/> Победа МЮ<br/>							
						<input type="radio" value="draw" name="genre"/> Ничья<br/>
						<input type="radio" value="sev" name="genre" checked="checked"/> Победа Севилья<br/>
						<input type="button" class="vote"value="Проголосовать" onClick='location.href="Squad.html"'>
					</div>
</div>