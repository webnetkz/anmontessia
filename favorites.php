<div id="favorites">
		<div style="display: flex; align-items: center;">
			<img src="/public/img/arr.png" class="h" onclick="closeFavorites();"><span class="h" onclick="closeFavorites();" style="margin-left: 15px; font-size: 1.2rem;">Избраное</span> <span class="h" style="margin-left: 60px;padding: 8px; border: 2px solid black; border-radius: 5px;" onclick="localStorage.clear(); updateFavorites(); updateElementsFavorites(); document.querySelector('.showElemsFavorites').innerHTML = ' ';">Очистить</span>
		</div>

		<div class="showElemsFavorites">

		</div>
		<div style="display: flex; justify-content: flex-end; align-items: flex-end;">
			<span style="font-size: 0.7rem; margin-right: 10px;">Итого</span><h1 id="resPriceFavorites">0</h1><h1>тг.</h1>
		</div>

		<span class="h" style=" width: 225px; margin-left: 50px; margin-top: 50px; text-align: center;padding: 5px;color: white; background: black; border-radius: 5px;">Оформление заказа</span>
	</div>

<script>

	orderPriceFavorites();

	function orderPriceFavorites()
	{
		let resPrice = document.querySelector('#resPriceFavorites');
		let allPrice = 0;
		let g1 = localStorage.getItem('l1');
			if(g1) {
				allPrice += Number(g1) * 25000;
			}
		let g2 = localStorage.getItem('l2');
			if(g2) {
				allPrice += Number(g2) * 31000;
			}
		let g3 = localStorage.getItem('l3');
			if(g3) {
				allPrice += Number(g3) * 28000;
			}

		resPrice.innerText = allPrice;
	}

	function updateElementsFavorites(elem, arg)
	{
		let nameProduct = '';
		let image = '';
		let price = 9999;

		switch (arg)
		{
			case 'l1':
				nameProduct = 'Клубника в шоколаде';
				image = '/public/img/index/strawbery.png';
				price = 25000;
			break;
			case 'l2':
				nameProduct = 'Бананы в шоколаде';
				image = '/public/img/index/banans.png';
				price = 31000;
			break;
			case 'l3':
				nameProduct = 'Финики с орехами в шоколаде';
				image = '/public/img/index/finiki.jpeg';
				price = 28000;
			break;
		}

		let cca = document.querySelector('.showElemsFavorites');
		let res = localStorage.getItem(arg);
		let argEl = document.querySelector('#'+arg);
			if(elem && !argEl) {
				cca.innerHTML += `<div><div style="display: flex; justify-content: space-between;">
				<img src="${image}" class="imgCart">
				<p style="margin-left: 5px; width: calc(100% - 60px)">
					${nameProduct}
				</p>
				<img src="/public/img/close.png" style="height: 20px;" onclick="localStorage.removeItem('`+arg+`'); this.parentNode.parentNode.remove(); updateFavorites();">
			</div>
            <br><hr style="border: 0.1px solid black;"><br></div>`;
			openFavorites();
		}	
	}
	updateElementsFavorites();
</script>

