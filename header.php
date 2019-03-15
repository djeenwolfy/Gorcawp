<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php bloginfo('name') ?></title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/materialize.css?" rel="stylesheet" type="text/css" media="screen,projection" />
    <link href="<?php bloginfo('stylesheet_url')?>" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="<?php bloginfo("template_url"); ?>/js/modernizr.custom.63321.js"></script>
</head>

<body>
<header>		
		<div class="mobile_btn "><a href="#" id="float-btn-menu" 	data-target="nav-mobile" class="sidenav-trigger hide-on-large-only btn-floating btn-medium"><i class="material-icons">menu</i></a></div>
	
		<div class="container" id="head">
			<span class="way hide-on-med-and-down" id="toFooter"><p><a href="footer">Как добраться</a></p></span>

			<div class="row valign-wrapper" id="header-content">
				<div class="col xl4" id="main-logo"><a href="index.html"><img src="<?php bloginfo('template_url')?>/img/logogorka_bel.png" width="230"></a>
				</div><!-- LOGO -->
				
				<div class="col xl9" id="Search">
					<form class="searchForm" action="">
						<input type="search" id="Seachstr">
						<button class="btnsearch"><i class="material-icons small">search</i></button>
					</form>
				</div>
				<div class="mobile-btn-search">
					<a href="#showSearch" class="modal-trigger"><i class="material-icons small">search</i></a>
				</div>				
			</div>
		</div>
		<!-- ============== menu ================== -->
		<div class="navi-wrap hide-on-med-and-down">
			<div class="sub-navi-wrap">
				<nav class="valign-wrapper main-nav">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'MainMenu',
                        'menu_class'      => 'menu'  )); 
                    ?>
					<!-- <ul class="">
						<li><a href="" class='dropdown-trigger' data-target='ski'>Лыжи</a></li>
						<li><a href="" class='dropdown-trigger' data-target='clothes'>Одежда</a></li>
						<li><a href="" class='dropdown-trigger' data-target='shoes'>Обувь</a></li>
						<li><a href="" class='dropdown-trigger' data-target='accesour'>Аксессуары</a></li>
						<li><a href="" class='dropdown-trigger' data-target='bikes'>Велосипеды</a></li>
						<li><a href="" class='dropdown-trigger' data-target='others'>Прочее</a></li>
					</ul> -->
				</nav>				
			</div>
		</div>

		<!-- ============== mobile menu ================== -->
		<nav>		
			<ul id="nav-mobile" class="sidenav">
				<br>
				 <?php wp_nav_menu( array(
                        'theme_location'  => 'MainMenu',
                        'menu_class'      => 'menu'  )); 
                    ?>
				<br>
				<li><a href="#showMap" class="modal-trigger">Как добраться</a></li>
			</ul>						
		</nav>
	<!-- ================= dropdowns menu =================-->
		<!-- <ul id='ski' class='dropdown-content'>
    		<li><a href="#!">Лыжи</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Лыжные ботинки</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Лыжные палки</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Лыжероллеры</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Смазка для лыж</a></li>
    		<li class="divider" tabindex="-1"></li>
  		</ul>
  		<ul id='clothes' class='dropdown-content'>
    		<li><a href="#!">Лыжные комбинезоны</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Разминочные костюмы</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Беговая форма</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Термобелье</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Куртки</a></li>
    		<li class="divider" tabindex="-1"></li>
  		</ul>
  		<ul id='shoes' class='dropdown-content'>
    		<li><a href="#!">Лыжные ботинки</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Зимняя обувь</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Кроссовки</a></li>
    		<li class="divider" tabindex="-1"></li>
  		</ul>
  		<ul id='accesour' class='dropdown-content'>
    		<li><a href="#!">Очки</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Банданы повязки</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Перчатки</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Носки</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Пульсометры</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Часы</a></li>
    		<li class="divider" tabindex="-1"></li>
  		</ul>
  		<ul id='bikes' class='dropdown-content'>
    		<li><a href="#!">Велосипеды</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Велоаксессуары</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Велозапчасти</a></li>
    		<li class="divider" tabindex="-1"></li>
  		</ul>
  		<ul id='others' class='dropdown-content'>
    		<li><a href="#!">Спортивные сумки</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Рюкзаки</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Термобочки</a></li>
    		<li class="divider" tabindex="-1"></li>
    		<li><a href="#!">Чехлы</a></li>
    		<li class="divider" tabindex="-1"></li>
  		</ul>
 -->

	</header>