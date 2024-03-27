<?php require_once './header.php';?>

	<div class="content" id="oneSlide">
		<h1 style="font-weight: 900;">Бренд Tenyes</h1>
		<h1 style="font-weight: 100;">Концептуальная</h1>
		<h1 style="font-weight: 100;">Уходовая косметика</h1>
		<h1 style="font-weight: 100;">Для тела и души</h1>
	</div>

	<div class="content" id="twoSlide">
		<h1 style="font-weight: 100;">Из натурального</h1>
		<h1 style="font-weight: 100;">Природного камня</h1>
		<h1 style="font-weight: 100;">Шунгит</h1>
	</div>

	<div class="content" id="threeSlide">
		<h1 style="font-weight: 900;">Tenyes</h1>
		<h1 style="font-weight: 900;">Shampoo</h1>
		<br>
		<p>
			Шампунь из натуральных элементов камня шунгит, <br>
			бережно очищает, не нарушая естественную защиту <br>
			волос, способствует регенерации и укреплению <br>
			волосяной луковицы, сокращает потерю волос
		</p>
		<br>
		<br>
		<p style="font-size: 1.1rem;">200 мл. 5000 тг</p>
		<br>
		<br>
		<div style="display: flex;" class="showBtns">
			<div class="buy bord h" onclick="localStorage.setItem('g1', 1); updateCounter();  updateCart('a1', 'g1'); modalClose();">
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
		<span class="dash h" id="i2" onclick="showI2()"></span>
		<span class="dash h" id="i3" onclick="showI3()"></span>
		<span class="dash h" id="i4" onclick="showI4()"></span>
		<span class="dash h" id="i5" onclick="showI5()"></span>
	</div>

	<footer id="footer">
		<div class="component" style="visibility: hidden;">
			<div>
				<img src="/public/img/img.png" style="margin-right: 50px;" class="imgMore">
				<div class="h likeImg"  onclick="localStorage.setItem('l2', 1);  updateFavorites();  updateElementsFavorites('a2', 'l2');">
					<img src="/public/img/likeWhite.png" style="width: 40px;">
				</div>
			</div>
			<div>
				<h2>TENYES SHAMPOO</h2>
				<br><br>
				<p>Шампунь из натуральных элементов камня <br>
				шунгит. Бережно очищает, не нарушая <br>
				естественную защиту волос, способствует <br>
				регенерации иукреплению волосяной <br>
				луковицы, сокращает потерю волос
				</p>
				<br><br>
				<p style="font-size: 1.1rem;">200 мл. 5000 тг</p>
				<br><br>
				<div style="display: flex;" style="visibility: hidden;" class="showBtns">
					<div class="buy bord h" onclick="localStorage.setItem('g2', 1);  updateCounter();  updateCart('a2', 'g2');">
						<img src="/public/img/cartBlack.png" style="margin-right: 10px;">
						Купить
					</div>
					<div class="show bord h">
						<img src="/public/img/show.png" style="width: 40px;" onclick="modalShow();">
					</div>
				</div>
			</div>
		</div>
		<div class="component" style="visibility: hidden;">
			<div style="visibility: hidden;">
				<h2>TENYES SHAMPOO</h2>
				<br><br>
				<p>Шампунь из натуральных элементов камня <br>
				шунгит. Бережно очищает, не нарушая <br>
				естественную защиту волос, способствует <br>
				регенерации иукреплению волосяной <br>
				луковицы, сокращает потерю волос
				</p>
				<br><br>
				<p style="font-size: 1.1rem;">200 мл. 5000 тг</p>
				<br><br>
				<div style="display: flex;"  class="showBtns">
					<div class="buy bord h" onclick="localStorage.setItem('g3', 1); updateCounter();  updateCart('a3', 'g3');">
						<img src="/public/img/cartBlack.png" style="margin-right: 10px;">
						Купить
					</div>
					<div class="show bord h">
						<img src="/public/img/show.png" style="width: 40px;" onclick="modalShow();">
					</div>
				</div>
			</div>
			<div>
				<img src="/public/img/img.png" style="margin-left: 50px;" class="imgMore">
				<div class="h likeImg" style="margin-left: 50px;" onclick="localStorage.setItem('l3', 1);  updateFavorites();  updateElementsFavorites('a3', 'l3');">
					<img src="/public/img/likeWhite.png" style="width: 40px;">
				</div>
			</div>
		</div>
		
		<hr class="hr">
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
    <input type="text"  name="name" class="inp">
    <span class="lab">Телефон</span>
    <input type="text" class="inp" name="phone">
    <span class="lab">Комментарий</span>
    <textarea name="comment" id="" cols="30" rows="2" class="inp"></textarea>
    <button class="bord" style="color: white; background: black; border: 1px solid black; font-size: 1.3rem; margin: 15px auto;" type="submit">Заказать</button>
 
      <input type="text" name="g1" style="display: none" id="resG1" value="123">
      <input type="text" name="g2" style="display: none" id="resG2">
      <input type="text" name="g3" style="display: none" id="resG3">
      <input type="text" name="g4" style="display: none" id="resG4">
  </form>
</div>