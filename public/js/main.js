function updateCounter() {
	let allCounter = 0;
	let cca = document.querySelector('.counterCart');
	let a1 = localStorage.getItem('g1');
		if(a1) {
			allCounter += Number(a1);
		}
	let a2 = localStorage.getItem('g2');
		if(a2) {
			let a2 = localStorage.getItem('g2');
			allCounter += Number(a2);
		}
	let a3 = localStorage.getItem('g3');
		if(a2) {
			let a3 = localStorage.getItem('g3');
			allCounter += Number(a3);
		}
	let a4 = localStorage.getItem('g4');
		if(a4) {
			let a4 = localStorage.getItem('g4');
			allCounter += Number(a4);
		}
	if(allCounter != 0) {
		cca.innerText = allCounter;
	} else {
        cca.innerText = '';
    }
	orderPrice();
}
updateCounter();

function updateFavorites() {
	let allCounter = 0;
	let cca = document.querySelector('.counterLike');
	let a1 = localStorage.getItem('l1');
		if(a1) {
			allCounter += Number(a1);
		}
	let a2 = localStorage.getItem('l2');
		if(a2) {
			let a2 = localStorage.getItem('l2');
			allCounter += Number(a2);
		}
	let a3 = localStorage.getItem('l3');
		if(a2) {
			let a3 = localStorage.getItem('l3');
			allCounter += Number(a3);
		}
	let a4 = localStorage.getItem('l4');
		if(a4) {
			let a4 = localStorage.getItem('l4');
			allCounter += Number(a4);
		}
	if(allCounter != 0) {
		cca.innerText = allCounter;
	} else {
        cca.innerText = '';
    }
	orderPriceFavorites();
}
updateFavorites();

function closeCart() {
    let cart = document.querySelector('#cart');
    cart.style.right = '-500px';
}
function openCart() {
    let cart = document.querySelector('#cart');
    cart.style.right = '0px';
}
function closeFavorites() {
    let favorites = document.querySelector('#favorites');
    favorites.style.right = '-500px';
}
function openFavorites() {
    let favorites = document.querySelector('#favorites');
    favorites.style.right = '0px';
}
function showI() {
    let content = document.querySelector('#threeSlide');
    document.querySelector('.dashActive').classList.remove('dashActive');
    document.querySelector('#i1').classList.add('dashActive');
    let sliderNow = document.querySelector('.sliderBg');
    sliderNow.classList.add('sliderBg0');
    sliderNow.classList.remove('sliderBg1');
    sliderNow.classList.remove('sliderBg2');
    content.innerHTML = 'Первый слайд';
}


function showI1() {
    let content = document.querySelector('#threeSlide');
    document.querySelector('.dashActive').classList.remove('dashActive');
    document.querySelector('#i2').classList.add('dashActive');
    let sliderNow = document.querySelector('.sliderBg');
    sliderNow.classList.add('sliderBg2');
    sliderNow.classList.remove('sliderBg0');
    sliderNow.classList.remove('sliderBg2');
    sliderNow.classList.remove('sliderBg3');

    content.innerHTML = 'Второй слайд';
}

function showI2() {
    let content = document.querySelector('#threeSlide');
    document.querySelector('.dashActive').classList.remove('dashActive');
    document.querySelector('#i3').classList.add('dashActive');
    let sliderNow = document.querySelector('.sliderBg');
    sliderNow.classList.add('sliderBg3');
    sliderNow.classList.remove('sliderBg0');
    sliderNow.classList.remove('sliderBg1');
    sliderNow.classList.remove('sliderBg2');

    content.innerHTML = 'Третий слайд';
}

window.addEventListener('scroll', headerMin);

function headerMin() {
    let cont = document.querySelector('#oneSlide');
    // cont.scrollIntoView({ behavior: 'smooth' });
    if(window.scrollY > 100) {
        cont.style.opacity = '0';				
    } else {
        cont.style.opacity = '1';
    }


    let contTwo = document.querySelector('#twoSlide');
    if(window.scrollY > 1050) {
        contTwo.style.opacity = '0';				
    } else {
        contTwo.style.opacity = '1';
    }

    let contThree = document.querySelector('#threeSlide');
    if(window.scrollY > 2000) {
        contThree.style.opacity = '0';				
    } else {
        contThree.style.opacity = '1';
    }
}

function isVisible(elem) {
    
    let coords = elem.getBoundingClientRect();

    let windowHeight = document.documentElement.clientHeight;

    // верхний край элемента виден?
    let topVisible = coords.top > 0 && coords.top < windowHeight;

    // нижний край элемента виден?
    let bottomVisible = coords.bottom < windowHeight && coords.bottom > 0;

    return topVisible || bottomVisible;
}

function showVisible() {
for (let img of document.querySelectorAll('div[style="visibility: hidden;"]')) {

    if (isVisible(img)) {
        setTimeout(() => {
            img.style.visibility = 'visible';
            img.classList.add('showElem');
        }, 300);
    }
}
}
showVisible();
window.addEventListener('scroll', showVisible);


let a1 = localStorage.getItem('g1');
if(a1) {
    updateCart('a1', 'g1');
}
let a2 = localStorage.getItem('g2');
if(a2) {
    updateCart('a2', 'g2');
}
let a3 = localStorage.getItem('g3');
if(a3) {
    updateCart('a3', 'g3');
}
let a4 = localStorage.getItem('g4');
if(a4) {
    updateCart('a4', 'g4');
}

let l1 = localStorage.getItem('l1');
if(l1) {
    updateElementsFavorites('a1', 'l1');
}
let l2 = localStorage.getItem('l2');
if(l2) {
    updateElementsFavorites('a2', 'l2');
}
let l3 = localStorage.getItem('l3');
if(l3) {
    updateElementsFavorites('a3', 'l3');
}
let l4 = localStorage.getItem('l4');
if(l4) {
    updateElementsFavorites('a4', 'l4');
}



function up(elem) {
	let count = elem.previousSibling.previousSibling.innerText;
    localStorage.setItem(elem.previousSibling.previousSibling.id, Number(count) + 1);
	count = Number(count) + 1;
	elem.previousSibling.previousSibling.innerText = count;
    orderPrice();
    updateCounter();
}
function down(elem) {
	let count = elem.nextSibling.nextSibling.innerText;
	if(count <= 0) {
		return false;
	}
    localStorage.setItem(elem.nextSibling.nextSibling.id, Number(count) - 1);
	count = Number(count) - 1;
	elem.nextSibling.nextSibling.innerText = count;
    orderPrice();
    updateCounter();
}

function showLastModal() {
    let m = document.querySelector('.showLastModal');
m.style.transform = 'scale(1)';




// Добавить в итоговую форму значения корзины
document.querySelector('#resG1').value = localStorage.getItem('g1');
document.querySelector('#resG2').value = localStorage.getItem('g2');
document.querySelector('#resG3').value = localStorage.getItem('g3');
document.querySelector('#resG4').value = localStorage.getItem('g4');

}

function closeLastModal() {
let m = document.querySelector('.showLastModal');
m.style.transform = 'scale(0)';
}