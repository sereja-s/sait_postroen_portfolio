</main>

<!-- footer-page -->
<footer class="footer-page">
	<div class="container">
		<div class="footer-page__text">SaitPostroen 2023</div>
	</div>
</footer>
<!-- /.footer-page -->


<!-- popup-menu -->
<div class="popup popup-menu">
	<div class="popup__wrapper">
		<div class="popup__inner">
			<div class="popup__content popup__content--fluid popup__content--centered">
				<button class="btn-close popup__btn-close popup-close"></button>
				<nav class="mobile-menu popup__mobile-menu">
					<ul class="mobile-menu__ul">

						<?php if (!empty($this->menu['information'])) : ?>

							<?php foreach ($this->menu['information'] as $item) : ?>

								<li class="mobile-menu__li">
									<a class="mobile-menu__link popup-close" href="#" data-scroll-to="<?= $item['section_name'] ?>"><?= $item['name'] ?></a>
								</li>

							<?php endforeach; ?>

						<?php endif; ?>

						<!-- <li class="mobile-menu__li">
							<a class="mobile-menu__link popup-close" href="#" data-scroll-to="section-catalog">Портфолио</a>
						</li>
						<li class="mobile-menu__li">
							<a class="mobile-menu__link popup-close" href="#" data-scroll-to="section-about">О нас</a>
						</li>
						<li class="mobile-menu__li">
							<a class="mobile-menu__link popup-close" href="#" data-scroll-to="section-contacts">Контакты</a>
						</li> -->
					</ul>
				</nav>
				<div class="phone popup__phone">
					<a class="phone__item phone__item--accent" href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>"><?= $this->set['phone'] ?></a>
				</div>
				<p class="contacts__text">
					<a class="contacts__email" style="display:inline-block; padding-bottom:15px; text-decoration:none" href="mailto:<?= $this->set['email'] ?>"><?= $this->set['email'] ?></a>
				</p>
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
<!-- /.popup-menu -->

<?php $this->getScripts() ?>

</body>

</html>