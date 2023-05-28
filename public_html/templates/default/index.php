<?php if (!empty($section_top)) : ?>

	<!-- section-top -->
	<!-- Slider main container -->
	<div class="swiper">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->

			<?php foreach ($section_top as $item) : ?>

				<div class="section-top lazy swiper-slide" style='background: url("<?= $this->img($item['img']) ?>") center center/cover no-repeat fixed;'>
					<div class="section-top__container">
						<p class="section-top__info"><?= $item['name'] ?></p>
						<h1 class="section-top__title"><?= $item['short_content'] ?></h1>
					</div>
				</div>

			<?php endforeach; ?>

		</div>

		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>

	</div>

<?php endif; ?>

<!-- /.section-top -->

<div class="header__content">

	<h2 class="header__title">
		Создание и продвижение сайтов в Донецке</h2>
	<h3 class="header__subtitle">
		Заказать сайт в <span>САЙТ ПОСТРОЕН</span> - отличное решение </h3>
	<p class="header__text">
		Сделать сайт в <span>САЙТ ПОСТРОЕН</span> означает не только превосходно выполнить поставленную задачу, но и вызвать эмоции радости и восхищения заказчика при виде своего нового сайта на просторах интернета</p>

	<img class="header__images" src="<?= TEMPLATE ?>/assets/img/common/logotextSitePostroen.png" alt="САЙТ ПОСТРОЕН">
</div>

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

					<?php if (!empty($this->site_categories)) : ?>

						<?php foreach ($this->site_categories as $item) : ?>

							<li class="catalog-nav__item">
								<button class="catalog-nav__btn" type="button" data-filter="<?= $item['alias'] ?>"><?= $item['name'] ?></button>
							</li>

						<?php endforeach; ?>

					<?php endif; ?>

				</ul>
			</nav>
		</header>

		<div class="catalog">

			<?php if (!empty($this->websites)) : ?>

				<?php foreach ($this->websites as $item) : ?>

					<div class="catalog__item" data-category="<?= $item['alias_categories_name'] ?>">
						<div class="product catalog__product">
							<a class="product__img-link" href="<?= $item['external_alias'] ?>">
								<picture>
									<img class="product__img lazy" src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">
								</picture>
							</a>

							<div class="product__content">
								<h3 class="product__title"><?= $item['name'] ?></h3>
								<p class="product__description"><?= $item['short_content'] ?></p>
							</div>
							<footer class="product__footer">

								<div class="product__bottom">

									<a href="<?= $item['external_alias'] ?>" class="btn product__btn">перейти</a>
								</div>
							</footer>
						</div>
					</div>

				<?php endforeach; ?>

			<?php endif; ?>

		</div>
	</div>
</section>
<!-- /.section-catalog -->

<!-- section-about -->
<section class="section section-about">
	<picture>
		<img class="section-about__img lazy" src="<?= $this->img($this->set['img_horizontal']) ?>" alt="<?= $this->set['name'] ?>">
	</picture>
	<div class="container section-about__container">
		<div class="section-about__content">
			<h2 class="page-title section-about__title"><?= $this->menu['information'][1]['name'] ?></h2>
			<p class="section-about__text"><?= $this->set['short_content'] ?></p>
		</div>
	</div>
</section>
<!-- /.section-about -->

<!-- section-contacts -->
<section class="section section-contacts">
	<div class="container section-contacts__container">
		<div class="section-contacts__img lazy" style='background: url("<?= $this->img($this->set['img_footer']) ?>") center center/cover no-repeat;'>
		</div>
		<header class="section__header">
			<h2 class="page-title sectoin-contacts__title"><?= $this->menu['information'][2]['name'] ?></h2>
		</header>
		<div class="contacts">
			<div class="contacts__start">
				<div class="contacts__map" id="ymap" data-coordinates="<?= $this->set['map_coordinates'] ?>" data-address="<?= $this->set['map_address'] ?>"></div>
			</div>
			<div class="contacts__end">
				<div class="contacts__item">
					<h3 class="contacts__title">Адрес</h3>
					<p class="contacts__text"><?= $this->set['address'] ?></p>
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

						<?php if (!empty($this->socials)) : ?>

							<?php foreach ($this->socials as $item) : ?>

								<li class="socials__item">
									<a href="<?= $this->alias($item['external_alias']) ?>" class="socials__link">
										<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">
									</a>
								</li>

							<?php endforeach; ?>

						<?php endif; ?>

					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.section-contacts -->