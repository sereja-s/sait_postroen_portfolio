<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta name="description" content="сайт построен — создание и продвижение сайтов, дизайн визиток">
	<meta name="keywords" content="создать сайт в Донецке, сделать сайт в Донецке, интернет-магазин в Донецке, визитки">

	<meta property="og:title" content="сайт построен — создание и продвижение сайтов, дизайн визиток" />
	<meta property="og:description" content="сайт построен — создание и продвижение сайтов в Донецке" />
	<meta property="og:image" content="<?= TEMPLATE ?>/assets/img/common/logotextSitePostroen.png" />

	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/site.webmanifest">
	<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#ffbc42">
	<meta name="msapplication-TileColor" content="#ffbc42">
	<meta name="theme-color" content="#ffbc42">

	<title><?= $this->set['name'] ?></title>

	<?php $this->getStyles() ?>

	<!-- #1 Посадка верстки на Wordpress | Установка WP, базовая настройка (14:45) -->
	<script>
		var ForJS = {};
		/* укажем для описания полного пути к маркеру(картинки-лого) на карте */
		/* Остальное описано в main.js  */
		/* ForJS.siteUrl = ''; */
		ForJS.imgMap = '<?= $this->img($this->set['map_img']) ?>';
	</script>

</head>

<body>

	<!-- header-page -->
	<header class="header-page">
		<div class="container header-page__container">
			<div class="header-page__start">
				<a href="<?= $this->alias() ?>" class="logo">
					<img class="logo__img lazy" src="<?= $this->img($this->set['img_logo']) ?>" alt="<?= $this->set['name'] ?>">
				</a>
			</div>
			<div class="header-page__end">
				<nav class="header-page__nav">
					<ul class="header-page__ul">

						<?php if (!empty($this->menu['information'])) : ?>

							<?php foreach ($this->menu['information'] as $item) : ?>

								<li class="header-page__li">
									<a class="header-page__link" href="#" data-scroll-to="<?= $item['section_name'] ?>">
										<span class="header-page__text"><?= $item['name'] ?></span>
									</a>
								</li>

							<?php endforeach; ?>

						<?php endif; ?>

					</ul>
				</nav>
				<div class="phone">
					<a class="phone__item header-page__phone" href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>"><?= $this->set['phone'] ?></a>
				</div>
				<div class="header-page__hamburger">
					<button class="btn-menu" type="button" data-popup="popup-menu">
						<span class="btn-menu__box">
							<span class="btn-menu__inner"></span>
						</span>
					</button>
				</div>
			</div>
		</div>
	</header>
	<!-- /.header-page -->

	<main class="main">