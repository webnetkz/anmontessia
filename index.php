<?php require_once './header.php';?>

	<div class="content" id="oneSlide">
		<h1 style="font-weight: 900;"><?=APP?></h1>
		<h2 style="font-weight: 100;">Сладкие комплименты</h2>
		<h2 style="font-weight: 100;">Для самых близких</h2>
	</div>

	<div class="content" id="twoSlide">
		<h1 style="font-weight: 100;">Индивидуальные заказы</h1>
		<h2 style="font-weight: 100;">Поможем воплотить вашу фантазию</h2>
	</div>

	<div class="content" id="threeSlide">
		<h1 style="font-weight: 900;">Amour</h1>
		<h2 style="font-weight: 900;">Композиция включающая все позиции <b><?=APP?></b></h2>
		<br>
		<p>
			Бананы в шоколаде <br>
			Финики с орехами в шоколаде<br>
			Клюбника в шоколаде <br>
		</p>
		<br>
		<br>
		<p style="font-size: 1.1rem;">55 000 тг</p>
		<br>
		<br>
		<div style="display: flex;" class="showBtns">
			<div class="buy bord h" onclick="localStorage.setItem('g4', 1); updateCounter();  updateCart('a4', 'g4'); modalClose();">
				<img src="/public/img/cart.png" style="margin-right: 10px;">
				Купить
			</div>
			<div class="show bord h" onclick="modalShow();">
				<img src="/public/img/show.png" style="width: 40px;">
			</div>
		</div>
	</div>
	<div class="dashes">
		<span class="dash dashActive h" id="i1"  onclick="showI()"></span>
		<span class="dash h" id="i2" onclick="showI1()"></span>
		<span class="dash h" id="i3" onclick="showI2()"></span>
	</div>

	<footer id="footer">
		<div class="component" style="visibility: hidden;">
			<div>
				<img src="/public/img/index/strawbery.png" style="margin-right: 50px;" class="img-more">
				<div class="h like-img"  onclick="localStorage.setItem('l1', 1);  updateFavorites();  updateElementsFavorites('a1', 'l1');">
					<img src="/public/img/likeWhite.png" style="width: 40px;">
				</div>
			</div>
			<div>
				<h2>Клубника в шоколаде</h2>
				<br><br>
				<p>Отборная клубника <br>
				в нежном Бельгийском шоколаде <br>
				с неповторимым оформлением <br>
				</p>
				<br><br>
				<p style="font-size: 1.1rem;">25 000 тг</p>
				<br><br>
				<div style="display: flex;" style="visibility: hidden;" class="showBtns">
					<div class="buy bord h" onclick="localStorage.setItem('g1', 1);  updateCounter();  updateCart('a1', 'g1');">
						<img src="/public/img/cartBlack.png" style="margin-right: 10px;">
						Купить
					</div>
					<div class="show bord h">
						<img src="/public/img/show.png" style="width: 40px;" onclick="modalShow();">
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="component componentReverse" style="visibility: hidden;">
			<div style="visibility: hidden;">
				<h2>Бананы в шоколаде</h2>
				<br><br>
				<p>
					Лучшие спелые бананы в нежном шоколаде
				</p>
				<br><br>
				<p style="font-size: 1.1rem;">31 000 тг</p>
				<br><br>
				<div style="display: flex;"  class="showBtns">
					<div class="buy bord h" onclick="localStorage.setItem('g2', 1); updateCounter();  updateCart('a2', 'g2');">
						<img src="/public/img/cartBlack.png" style="margin-right: 10px;">
						Купить
					</div>
					<div class="show bord h">
						<img src="/public/img/show.png" style="width: 40px;" onclick="modalShow();">
					</div>
				</div>
			</div>
			<div>
				<img src="/public/img/index/banans.png" style="margin-left: 50px;" class="img-more">
				<div class="h like-img" style="margin-left: 50px; margin-top: -100px; top: -290px;" onclick="localStorage.setItem('l2', 1);  updateFavorites();  updateElementsFavorites('a2', 'l2');">
					<img src="/public/img/likeWhite.png" style="width: 40px;">
				</div>
			</div>
		</div>
		<div class="component" style="visibility: hidden;">
			<div>
				<img src="/public/img/index/finiki.jpeg" style="margin-right: 50px;" class="img-more">
				<div class="h like-img"  onclick="localStorage.setItem('l3', 1);  updateFavorites();  updateElementsFavorites('a3', 'l3');">
					<img src="/public/img/likeWhite.png" style="width: 40px;">
				</div>
			</div>
			<div>
				<h2>Финики в шоколаде c орехими</h2>
				<br><br>
				<p>Отборные финики<br>
				в нежном Бельгийском шоколаде с потрясающими орехами<br>
				и неповторимым оформлением <br>
				</p>
				<br><br>
				<p style="font-size: 1.1rem;">28 000 тг</p>
				<br><br>
				<div style="display: flex;" style="visibility: hidden;" class="showBtns">
					<div class="buy bord h" onclick="localStorage.setItem('g3', 1);  updateCounter();  updateCart('a3', 'g3');">
						<img src="/public/img/cartBlack.png" style="margin-right: 10px;">
						Купить
					</div>
					<div class="show bord h">
						<img src="/public/img/show.png" style="width: 40px;" onclick="modalShow();">
					</div>
				</div>
			</div>
		</div>
		<hr>
	</footer>
<?php
	require_once 'favorites.php';
	require_once 'cart.php';
	require_once 'modalShow.php';
	require_once 'modalOrder.php';
	require_once 'footer.php';
?>

<div class="showLastModal">
  <img src="/public/img/close.png" style="float: right; width: 24px;" onclick="closeLastModal();">
  <form action="send.php" method="POST">
    <span class="lab">Имя</span>
    <input type="tel"  name="name" class="inp" required>
    <span class="lab">Телефон</span>
    <input type="text" class="inp" name="phone" required>
    <span class="lab">Комментарий</span>
    <textarea name="comment" id="" cols="30" rows="2" class="inp"></textarea>
    <button class="bord" style="color: white; background: black; border: 1px solid black; font-size: 1.3rem; margin: 15px auto;" type="submit">Заказать</button>
 
      <input type="text" name="g1" style="display: none" id="resG1">
      <input type="text" name="g2" style="display: none" id="resG2">
      <input type="text" name="g3" style="display: none" id="resG3">
      <input type="text" name="g4" style="display: none" id="resG4">
  </form>
</div>