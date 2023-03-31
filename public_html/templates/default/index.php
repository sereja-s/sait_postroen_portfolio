<!-- section-top -->
<!-- Slider main container -->
<div class="swiper">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
		<div class="section-top lazy swiper-slide" style='background: url("img/section-top/дизайн сайтов-min.png") center center/cover no-repeat fixed;'>
			<div class="section-top__container">
				<p class="section-top__info">Cоздание сайта в Донецке</p>
				<h1 class="section-top__title">Мы создадим ваш сайт и разместим в интернете</h1>
				<!-- <div class="section-top__btn">
						<button class="btn" type="button" data-scroll-to="section-catalog">Выбрать</button>
					</div> -->
			</div>
		</div>
		<div class="section-top lazy swiper-slide" style='background: url("img/section-top/заказать сайт в Дoнецке-min.jpg") center center/cover no-repeat fixed;'>
			<div class="section-top__container">
				<p class="section-top__info">Обслуживание и продвижение сайта</p>
				<h1 class="section-top__title">Мы позаботимся о вашем сайте</h1>
			</div>
		</div>
		<div class="section-top lazy swiper-slide" style='background: url("img/section-top/адаптивный сайт.jpg") center center/cover no-repeat fixed;'>
			<div class="section-top__container">
				<p class="section-top__info">Ваш сайт будет прекрасно смотреться на всех экранах</p>
				<h1 class="section-top__title">Вы будете довольны результатом !</h1>
			</div>
		</div>
		<div class="section-top lazy swiper-slide" style='background: url("img/section-top/дизайн визиток-min.jpg") center top/cover no-repeat fixed;'>
			<div class="section-top__container">
				<p class="section-top__info">Дополнительная услуга</p>
				<h1 class="section-top__title">Создание визиток</h1>
			</div>
		</div>
	</div>
	<!-- If we need pagination -->
	<div class="swiper-pagination"></div>

	<!-- If we need navigation buttons -->
	<!-- <div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div> -->

	<!-- If we need scrollbar -->
	<!-- <div class="swiper-scrollbar"></div> -->
</div>

<!-- /.section-top -->

<!-- section-catalog -->
<section class="section section-catalog">
	<div class="container">
		<header class="section__header">
			<h2 class="page-title page-title--accent"><?= $this->menu['information'][0]['name'] ?></h2>
			<nav class="catalog-nav">
				<ul class="catalog-nav__wrapper">
					<li class="catalog-nav__item">
						<button class="catalog-nav__btn is-active" type="button" data-filter="all">все</button>
					</li>

					<?php if (!empty($this->menu['site_categories'])) : ?>

						<?php foreach ($this->menu['site_categories'] as $item) : ?>

							<li class="catalog-nav__item">
								<button class="catalog-nav__btn" type="button" data-filter="<?= $item['alias'] ?>"><?= $item['name'] ?></button>
							</li>

						<?php endforeach; ?>

					<?php endif; ?>

					<!-- <li class="catalog-nav__item">
						<button class="catalog-nav__btn" type="button" data-filter="wp">на WordPress</button>
					</li>
					<li class="catalog-nav__item">
						<button class="catalog-nav__btn" type="button" data-filter="internet-shop">Интернет-магазин</button>
					</li> -->
				</ul>
			</nav>
		</header>

		<div class="catalog">
			<div class="catalog__item" data-category="site">
				<div class="product catalog__product">
					<a class="product__img-link" href="http://remont-holodilnoy-tehniki.liveblog365.com">
						<picture>
							<img class="product__img lazy" src="img/section-catalog/сайт_ремонт_холодильной_техники-min.JPG" alt="">
						</picture>
					</a>

					<div class="product__content">
						<h3 class="product__title">Одностраничный сайт</h3>
						<p class="product__description">рекламирует услуги по ремонту холодильного оборудования</p>
					</div>
					<footer class="product__footer">

						<div class="product__bottom">

							<a href="http://remont-holodilnoy-tehniki.liveblog365.com" class="btn product__btn">перейти</a>
						</div>
					</footer>
				</div>
			</div>
			<div class="catalog__item" data-category="site">
				<div class="product catalog__product">
					<a class="product__img-link" href="http://chaikofsky.unaux.com">
						<picture>
							<img class="product__img lazy" src="img/section-catalog/одностраничный сайт мастер по всему-min.JPG" alt="">
						</picture>
					</a>

					<div class="product__content">
						<h3 class="product__title">Одностраничный сайт</h3>
						<p class="product__description">Информирует о разнообразных услугах в сфере строительства и
							ремонта
							помещений</p>
					</div>
					<footer class="product__footer">

						<div class="product__bottom">

							<a href="http://chaikofsky.unaux.com/" class="btn product__btn">перейти</a>
						</div>
					</footer>
				</div>
			</div>
			<div class="catalog__item" data-category="site">
				<div class="product catalog__product">
					<a class="product__img-link" href="http://y66698u9.beget.tech">
						<picture>
							<img class="product__img lazy" src="img/section-catalog/многостраничный сайт-min.JPG" alt="">
						</picture>
					</a>

					<div class="product__content">
						<h3 class="product__title">Многостраничный сайт</h3>
						<p class="product__description">Рассказывает о различных сортах чая, кофе и сопутствующих
							товарах
						</p>
					</div>
					<footer class="product__footer">

						<div class="product__bottom">

							<a href="http://y66698u9.beget.tech" class="btn product__btn">перейти</a>
						</div>
					</footer>
				</div>
			</div>
			<div class="catalog__item" data-category="wp">
				<div class="product catalog__product">
					<a class="product__img-link" href="https://chaikofsky.wordpress.com">
						<picture>
							<img class="product__img lazy" src="img/section-catalog/Сайт-каталог на WP-min.JPG" alt="">
						</picture>
					</a>

					<div class="product__content">
						<h3 class="product__title">Сайт-каталог</h3>
						<p class="product__description">Выполнен на популярной CMS (система управления, позволяющая
							работать с контентом сайта): WordPress</p>
					</div>
					<footer class="product__footer">

						<div class="product__bottom">

							<a href="https://chaikofsky.wordpress.com" class="btn product__btn">перейти</a>
						</div>
					</footer>
				</div>
			</div>
			<div class="catalog__item" data-category="wp">
				<div class="product catalog__product">
					<a class="product__img-link" href="http://sait-postroen.ezyro.com">
						<picture>
							<img class="product__img lazy" src="img/section-catalog/сайт интернет-магазин на WP-min.JPG" alt="">
						</picture>
					</a>

					<div class="product__content">
						<h3 class="product__title">Интернет-магазин</h3>
						<p class="product__description">Выполнен на WordPress с использованием WooCommerce (инструмент
							для
							расширения возможностей электронной коммерции)
						</p>
					</div>
					<footer class="product__footer">

						<div class="product__bottom">

							<a href="http://sait-postroen.ezyro.com" class="btn product__btn">перейти</a>
						</div>
					</footer>
				</div>
			</div>
			<div class="catalog__item" data-category="internet-shop">
				<div class="product catalog__product">
					<a class="product__img-link" href="">
						<picture>
							<img class="product__img lazy" src="img/section-catalog/сайт-интернет-магазин-min.JPG" alt="">
						</picture>
					</a>

					<div class="product__content">
						<h3 class="product__title">Интернет-магазин</h3>
						<p class="product__description">Разрабатывается без использования фреймворков с собственной
							системой управления
							контентом</p>
					</div>
					<footer class="product__footer">

						<div class="product__bottom">

							<a href="" class="btn product__btn">перейти</a>
						</div>
					</footer>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- /.section-catalog -->

<!-- section-about -->
<section class="section section-about">
	<picture>
		<img class="section-about__img lazy" src="img/section-about/SEO продвижение сайта-min.jpg" alt="">
	</picture>
	<div class="container section-about__container">
		<div class="section-about__content">
			<h2 class="page-title section-about__title">О нас</h2>
			<p class="section-about__text">Новый проект: "Сайт Построен" говорит сам за себя Команда подбирается из
				талантливых, инициативных, влюблённых в своё дело сотрудников, которые постоянно совершенствуются в
				решении интересных задач при построении сайтов и продвижении их на просторах интернета</p>
		</div>
	</div>
</section>
<!-- /.section-about -->

<!-- section-contacts -->
<section class="section section-contacts">
	<div class="container section-contacts__container">
		<div class="section-contacts__img lazy" style='background: url("img/section-contacts/сайт построен-min.jpg") center center/cover no-repeat;'>
		</div>
		<header class="section__header">
			<h2 class="page-title sectoin-contacts__title">Контакты</h2>
		</header>
		<div class="contacts">
			<div class="contacts__start">
				<div class="contacts__map" id="ymap" data-coordinates="47.991522, 37.798313" data-address="г.Донецк, ориентир ТЦ Золотое кольцо"></div>
			</div>
			<div class="contacts__end">
				<div class="contacts__item">
					<h3 class="contacts__title">Адрес</h3>
					<p class="contacts__text">г. Донецк</p>
				</div>
				<div class="contacts__item">
					<h3 class="contacts__title">Телефон</h3>
					<p class="contacts__text">
						<a class="contacts__phone" href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>"><?= $this->set['phone'] ?></a>
					</p>
				</div>
				<div class="contacts__item">
					<h3 class="contacts__title">Эл.почта</h3>
					<p class="contacts__text">
						<a class="contacts__phone" href="mailto:<?= $this->set['email'] ?>"><?= $this->set['email'] ?></a>
					</p>
				</div>
				<div class="contacts__item">
					<h3 class="contacts__title">Социальные сети</h3>
					<ul class="socials">
						<li class="socials__item">
							<a href="#" class="socials__link" target="_blank">
								<svg class="socials__icon socials__icon--vk" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.2 112.2" width="35" height="35">
									<g>
										<circle cx="56.1" cy="56.1" r="56.1" />
										<path class="socials__logo" d="M54,80.7h4.4a3.33,3.33,0,0,0,2-.9,3.37,3.37,0,0,0,.6-1.9s-.1-5.9,2.7-6.8,6.2,5.7,9.9,8.2c2.8,1.9,4.9,1.5,4.9,1.5l9.8-.1s5.1-.3,2.7-4.4c-.2-.3-1.4-3-7.3-8.5-6.2-5.7-5.3-4.8,2.1-14.7,4.5-6,6.3-9.7,5.8-11.3s-3.9-1.1-3.9-1.1l-11.1.1a2.32,2.32,0,0,0-1.4.3,3.58,3.58,0,0,0-1,1.2A60,60,0,0,1,70,50.9c-4.9,8.4-6.9,8.8-7.7,8.3-1.9-1.2-1.4-4.9-1.4-7.5,0-8.1,1.2-11.5-2.4-12.4a17.68,17.68,0,0,0-5.2-.5c-4,0-7.3,0-9.2.9-1.3.6-2.2,2-1.6,2.1a5.05,5.05,0,0,1,3.3,1.6c1.1,1.5,1.1,5,1.1,5s.7,9.6-1.5,10.7c-1.5.8-3.5-.8-7.9-8.4a67.05,67.05,0,0,1-4-8.2,2.82,2.82,0,0,0-.9-1.2,5.13,5.13,0,0,0-1.7-.7l-10.5.1s-1.6,0-2.2.7,0,1.9,0,1.9,8.2,19.3,17.6,29c8.5,9,18.2,8.4,18.2,8.4Z" />
									</g>
								</svg>
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.section-contacts -->