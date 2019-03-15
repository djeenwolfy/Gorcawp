<?php get_header(); ?>
	<main>
		<!-- ======== open search ob mobile ========== -->
	<div id="showSearch" class="modal">
    	<div class="modal-content">
      		    <form class="searchForm" action="">
						<input type="search" id="Seachstr">
						<button class="btnsearch"><i class="material-icons small">search</i></button>
					</form>
      	</div>
  	</div>
		<!-- ============== first slider ============== -->
		<div class="first-slider-box valign-wrapper">
			<div class="slider container" id="SlideR">
				<ul class="slides" id="SlideS">
					<li>
						<img src="<?php bloginfo('template_url')?>/img/cross-country-skiing-first-slider.jpg"> <!-- random image -->
						<div class="caption center-align">
							<h3>Магазин Горка21 </h3>
							<h5 class="light grey-text text-lighten-3">Снаряжение и инвентарь для лыжников</h5>
						</div>
					</li>
					<li>
						<img src="<?php bloginfo('template_url')?>/img/run-man-mirror.jpg"> <!-- random image -->
						<div class="caption left-align">
							<h3>Бег</h3>
							<h5 class="light grey-text text-lighten-3">Обувь и аксессуары для бега</h5>
						</div>
					</li>
					<li>
						<img src="<?php bloginfo('template_url')?>/img/m-bike-mirror.jpg"> <!-- random image -->
						<div class="caption right-align">
							<h3>Велоспорт</h3>
							<h5 class="light grey-text text-lighten-3">Велосипеды и велооборудование</h5>
						</div>
					</li>
				</ul>
			</div>
		</div> <!-- ============== first slider end ============== -->

		<!-- ============== second slider ============== -->
		<div class="second-slider-box ">
			<hr>
			<br><br>
			<div class="catalog-text center">
				<h3>Новинки</h3>
			</div>
			<br>
			<div class="main">
				<div id="mi-slider" class="mi-slider">
					<ul>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img01"><h4>Модель ххх</h4></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img02"><h4>Модель ххх</h4></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img03"><h4>Модель ххх</h4></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img04"><h4>Модель ххх</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img05"><h4>Модель ххх</h4></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img06"><h4>Модель ххх </h4></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img07"><h4>Модель ххх</h4></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img08"><h4>Модель ххх</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img09"><h4>Модель ххх</h4></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img10"><h4>Модель ххх</h4></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img11"><h4>Модель ххх</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img12"><h4>Модель ххх</h4></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img13"><h4>Модель ххх</h4></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img14"><h4>Модель ххх</h4></a></li>
						<li><a href="#"><img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" alt="img15"><h4>Модель ххх</h4></a></li>
					</ul>
					<nav>
						<a href="#">Обувь</a>
						<a href="#">Аксессуары</a>
						<a href="#">Велотовары</a>
						<a href="#">Разное</a>
					</nav>
				</div>
			</div>
			<br><br>
			<hr>
			<br><br>
		</div> <!-- ============== second slider end ============== -->

		<!-- ========== catalog ============= -->
		<div class="catalog-bg valign-wrapper">
			<div class="container">
				<div class="catalog-text center">
					<h3>Каталог товаров</h3>
				</div>
				<br>
				<section class="catalog-section grid ">
					<div class="catalog-item grid item1">

						<figure class="effect-oscar">
							<img src="<?php bloginfo('template_url')?>/img/sourse-items/1item-wover.png" width="100%" />
							<figcaption>
								<br>
								<h2><span>Аксессуары</span></h2>
								<p>Различные спортивные аксессуары</p>
								<a href="#">View more</a>
							</figcaption>			
						</figure>

					</div>
					<div class="catalog-item grid item2">
						<figure class="effect-oscar">
							<img src="<?php bloginfo('template_url')?>/img/sourse-items/2item-wover.png" width="100%" />
							<figcaption>
								
								<h2>Активный<br><span>Отдых</span></h2>
								<p>Инвентарь для активного отдыха</p>
								<a href="#">View more</a>
							</figcaption>			
						</figure>
					</div>
					<div class="catalog-item grid item3">
						<figure class="effect-oscar">
							<img src="<?php bloginfo('template_url')?>/img/sourse-items/3item-wover.png" width="100%" />
							<figcaption>
								
								<h2>Спортивные<br><span>Сумки</span></h2>
								<p>Сумки и рюкзаки</p>
								<a href="#">View more</a>
							</figcaption>			
						</figure>
					</div>
					<div class="catalog-item grid item4">
						<figure class="effect-oscar">
							<img src="<?php bloginfo('template_url')?>/img/sourse-items/4item-wover.png" width="100%" />
							<figcaption>
								<br><br>
								<h2>Костюмы<br>и<br><span>Комбенизоны</span></h2>
								<p>Лыжиные, спортивные костюмы, термобелье</p>
								<a href="#">View more</a>
							</figcaption>			
						</figure>
					</div>
					<div class="catalog-item grid item5">
						<figure class="effect-oscar">
							<img src="<?php bloginfo('template_url')?>/img/sourse-items/5item-wover.png" width="100%" />
							<figcaption>
								<h2><span>Лыжи</span></h2>
								<p>Лыжи, лыжероллеры и все для них</p>
								<a href="#">View more</a>
							</figcaption>			
						</figure>
					</div>
					<div class="catalog-item grid item6">
						<figure class="effect-oscar">
							<img src="<?php bloginfo('template_url')?>/img/sourse-items/6item-wover.png" width="100%" />
							<figcaption>
								
								<h2><br><span>Прочее</span></h2>
								<p>Различные товары</p>
								<a href="#">View more</a>
							</figcaption>			
						</figure>
					</div>
					<div class="catalog-item grid item7">
						<figure class="effect-oscar">
							<img src="<?php bloginfo('template_url')?>/img/sourse-items/7item-wover.png" width="100%" />
							<figcaption>
								<br>
								<h2><span>Кроссовки</span></h2>
								<p>кроссовки</p>
								<a href="#">View more</a>
							</figcaption>			
						</figure>
					</div>
					<div class="catalog-item grid item8">
						<figure class="effect-oscar">
							<img src="<?php bloginfo('template_url')?>/img/sourse-items/8item-wover.png" width="100%" />
							<figcaption>
								<h2>лыжные<br><span>ботинки</span></h2>
								<p>Лыжная обувь</p>
								<a href="#">View more</a>
							</figcaption>			
						</figure>
					</div>
					<div class="catalog-item grid item9">
						<figure class="effect-oscar">
							<img src="<?php bloginfo('template_url')?>/img/sourse-items/9item-wover.png" width="100%" />
							<figcaption>
								<h2><span>Велотовары</span></h2>
								<p>Велосипеды и велоаксессуары</p>
								<a href="#">View more</a>
							</figcaption>			
						</figure>
					</div>
				</section>		
			</div>
		</div> <!-- ========== catalog end============= -->
	<?php get_template_part('widgetwp') ?>
	<!-- ======== open map ========== -->
	<div id="showMap" class="modal">
    	<div class="modal-content">
      		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A57bec4b0035a4ba105f72567ce7aacc603d98c1c2a231f03a6dc08438af4ef2b&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>    
      	</div>
    	<div class="modal-footer">
      		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Закрыть</a>
    	</div>
  	</div>
	</main>

<?php get_footer(); ?>


