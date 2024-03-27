<?php

require_once './dev.php';
require_once './settings.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/public/styles/style.css">
	<link rel="stylesheet" href="/public/styles/mStyle.css">
	<title><?=APP?></title>
	<link type="image/png" sizes="96x96" rel="icon" href="./public/img/favicon.png">
</head>
<body>
	<div class="sliderBg sliderBg0">
		
	</div>
	
	<header>
		<div class="logo h" onclick="location.href = '#'">
			<img src="/public/img/logo.png" alt="ten yes logotype h" onclick="location.href = '#'">
			<h1><?=APP?></h1>
		</div>
		<div class="menu">
			<a href="#footer" class="catalog h">Каталог</a>
			<div class="wp forIcon" onclick="location.href='https://api.whatsapp.com/send?phone=<?=PHONE?>'">
				<img src="/public/img/wp.png" alt="whats app" class="h">
				<p>WhatsApp</p>
			</div>
			<div class="like forIcon" onclick="openFavorites();">
				<img src="/public/img/like.png" class="h">
				<span class="counterLike"></span>
				<p>Избранное</p>
			</div>
			<div class="cart forIcon" onclick="openCart();">
				<img src="/public/img/cart.png" class="h">
				<span class="counterCart"></span>
				<p>Корзина</p>
			</div>
		</div>
	</header>