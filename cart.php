<div id="cart">
		<div style="display: flex; align-items: center;">
			<img src="/public/img/arr.png" onclick="closeCart();" class="h"><span class="h" onclick="closeCart();" style="margin-left: 15px; font-size: 1.2rem;">Корзина</span> <span class="h" style="margin-left: 60px;padding: 8px; border: 2px solid black; border-radius: 5px;" onclick="localStorage.clear(); updateCounter(); updateCart(); document.querySelector('.showElems').innerHTML = '';">Очистить</span>
		</div>

		<div class="showElems">

		</div>
		<div style="display: flex; justify-content: flex-end; align-items: flex-end;">
			<span style="font-size: 0.7rem; margin-right: 10px;">Итого</span><h1 id="resPrice">0</h1><h1>тг.</h1>
		</div>

		<span class="h" style=" width: 225px; margin-left: 50px; margin-top: 50px; text-align: center;padding: 5px;color: white; background: black; border-radius: 5px;" onclick="showLastModal();">Оформление заказа</span>
	</div>

<script>

	function orderPrice() {
		let resPrice = document.querySelector('#resPrice');
		let allPrice = 0;
		let g1 = localStorage.getItem('g1');
			if(g1) {
				allPrice += Number(g1) * 5000;
			}
		let g2 = localStorage.getItem('g2');
			if(g2) {
				allPrice += Number(g2) * 5000;
			}
		let g3 = localStorage.getItem('g3');
			if(g3) {
				allPrice += Number(g3) * 5000;
			}
		let g4 = localStorage.getItem('g4');
			if(g4) {
				allPrice += Number(g4) * 5000;
			}

		resPrice.innerText = allPrice;
	}
	orderPrice();

	function updateCart(elem, arg) {
		
		let cca = document.querySelector('.showElems');
		let res = localStorage.getItem(arg);
		let argEl = document.querySelector('#'+arg);
			if(elem && !argEl) {
				cca.innerHTML += `<div><div style="display: flex; justify-content: space-between;">
				<img src="/public/img/bg.jpg" class="imgCart">
				<p style="margin-left: -60px;">
					Ten Yes <br>
					shampoo <br>
					200 мл.
				</p>
				<img src="/public/img/close.png" style="height: 20px;" onclick="localStorage.removeItem('`+arg+`'); this.parentNode.parentNode.remove(); updateCounter();">
			</div>
			<div style="display: flex; align-items: flex-end; position: relative; top: -10px;">
				<p style="font-size: 1.3rem;">5000 тг.</p>
				<div class="counter" style="margin-left: 30px; margin-bottom: 0;">
					<span onclick="down(this)">-</span>
					<span class="count" id="`+arg+`">`+res+`</span>
					<span onclick="up(this)">+</span>
				</div>
			</div><br><hr style="border: 0.1px solid black;"><br></div>`;
			openCart();
		}	
	}
	updateCart();
</script>

