<div class="mod">
	<div class="modalOne">
		<div style=" margin-bottom: 30px;">
			<h3>Быстрый просмотр</h5>
			<img src="/public/img/close.png" style="float: right; width: 24px;" onclick="modalClose();">
		</div>
		<div style="display: flex; align-items: flex-start" class="showModalCard">
			<div class="imgShowModalCard"></div>
			<div style="width: 450px">
				<h2 style="padding-bottom: 10px; border-bottom: 1px solid black; width: 100%;">TENYES SHAMPOO</h2>
				<p style="font-size: 1.1rem; margin-top: 10px;">200 мл. 5000 тг</p>

				<div class="counter">
					<span onclick="down(this)">-</span>
					<span class="count" id="count4">1</span>
					<span onclick="up(this)">+</span>
				</div>

				<div style="display: flex;" class="showBtns">
					<div class="buy bord h" style="color: white; background: black; border: 1px solid black;"  onclick="let g4 = document.querySelector('#count4').innerText;localStorage.setItem('g4', g4); updateCounter(); updateCart('a4', 'g4'); modalClose();">
						<img src="/public/img/cart.png" style="margin-right: 10px; ">
						Купить
					</div>
					<div class="show bord h" style="border: 1px solid black;">
						<img src="/public/img/likeBlack.png" style="width: 40px;">
					</div>
				</div>

				<br><br>
				<p>Шампунь из натуральных элементов камня 
					шунгит. Бережно очищает, не нарушая 
					естественную защиту волос, способствует 
					регенерации и укреплению волосяной 
					луковицы, сокращает потерю волос
					Шампунь из натуральных элементов камня 
					шунгит. Бережно очищает, не нарушая 
					естественную защиту волос, способствует
					Шампунь из натуральных элементов камня 
					шунгит. Бережно очищает, не нарушая 
					естественную защиту волос, способствует ...</p>
					<br><br>
					<a href="#" style="text-decoration: none; color: black; border-bottom: 1px solid black;">Открыть страницу товара</a>
			</div>
		</div>
	</div>
</div>

<script>
	function modalShow() {
		let m = document.querySelector('.mod');
        m.style.transform = 'scale(1)';
	}

    function modalClose() {
        let m = document.querySelector('.mod');
        m.style.transform = 'scale(0)';
    }
</script>