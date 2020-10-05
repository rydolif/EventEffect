<header class="header">
		<div class="header__container">

			<a href="/" class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header__logo.svg" alt="logo">
				<p>Лучшие интерактивные <br>развлечения на мероприятия <br>любого формата</p>
			</a>

			<div class="header__soc">
				<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt=""></a>
				<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt=""></a>
			</div>

			<nav class="header__nav">
				<ul>
					<li class="header__nav_toggle">
						<a href="#">Наши услуги</a>
						<ul>
							<li><a href="#">Фотобудка</a></li>
							<li><a href="#">Инстапринтер</a></li>
							<li><a href="#">Bullet Time</a></li>
							<li><a href="#">SlowMo 360</a></li>
							<li><a href="#">Неоновый туннель</a></li>
							<li><a href="#">Фотостена</a></li>
							<li><a href="#">Gif стойка</a></li>
							<li><a href="#">Фотозеркало</a></li>
							<li><a href="#">Фотомагниты</a></li>
							<li><a href="#">LED фотозона</a></li>
							<li><a href="#">Гоночки Slot-Car</a></li>
							<li><a href="#">Bubble Heads</a></li>
							<li><a href="#">Тату принтер Prinker</a></li>
							<li><a href="#">Little Planet</a></li>
							<li><a href="#">Флипбуки</a></li>
						</ul>
					</li>
					<li><a href="#">Блог</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
				<div class="header__nav_mobile header__soc">
					<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt=""></a>
					<a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt=""></a>
				</div>
				<div class="header__nav_mobile header__messenger">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.png" alt=""></a>
				</div>
				<div class="header__info_mobile header__info">
					<p class="header__info_clock">Звоните с 8.00 до 23.00 ежедневно</p>
					<p><a href="tel:89622132229" class="header__info_tel">8 962 213 22 29</a></p>
					<p>
						<a href="mailto:info@event-effect.ru" class="header__info_mail">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="">
							<span>info@event-effect.ru</span>
						</a>
					</p>
				</div>
			</nav>

			<div class="header__messenger">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.png" alt=""></a>
			</div>

			<div class="header__wrap">
				<div class="header__info">
					<p class="header__info_clock">Звоните с 8.00 до 23.00 ежедневно</p>
					<p><a href="tel:89622132229" class="header__info_tel">8 962 213 22 29</a></p>
					<p>
						<a href="mailto:info@event-effect.ru" class="header__info_mail">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="">
							<span>info@event-effect.ru</span>
						</a>
					</p>
				</div>
	
				<button class="hamburger" type="button">
					<span class="hamburger__box">
						<span class="hamburger__item"></span>
					</span>
				</button>
			</div>

		</div>
	</header>

	<main class="main">
		<div class="header__container">

			<a href="/" class="header__logo">auto<b>nomera</b></a>

			<button class="hamburger" type="button">
				<span class="hamburger__box">
					<span class="hamburger__item"></span>
				</span>
			</button>

			<nav class="header__nav nav">
				<?php 
					wp_nav_menu( array(
					'menu'=>'menu',
					'menu_class'=>'list',
					'theme_location'=>'menu',
					) );
				?>
				<div class="header__nav_soc header__soc">
					<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__soc_tel"><?php the_field('tel', 'option'); ?></a>
					<a href="<?php the_field('vk', 'option'); ?>" target="_blank" class="header__soc_link header__soc_vk">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/svg/vk.svg" alt="">
					</a>
					<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank" class="header__soc_link header__soc_whatsapp">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/svg/whatsapp.svg" alt="">
					</a>
					<a href="<?php the_field('telegram', 'option'); ?>" target="_blank" class="header__soc_link header__soc_telegram">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/svg/telegram.svg" alt="">
					</a>
					<a href="<?php the_field('viber', 'option'); ?>" target="_blank" class="header__soc_link header__soc_viber">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/svg/viber.svg" alt="">
					</a>
				</div>
				<a href="#" class="header__nav_btn btn order_open">Запрос на поиск номера</a>
			</nav>

			<div class="header__soc">
				<a href="tel:<?php the_field('tel_url', 'option'); ?>" class="header__soc_tel"><?php the_field('tel', 'option'); ?></a>
				<a href="<?php the_field('vk', 'option'); ?>" target="_blank" class="header__soc_link header__soc_vk">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/svg/vk.svg" alt="">
				</a>
				<a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank" class="header__soc_link header__soc_whatsapp">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/svg/whatsapp.svg" alt="">
				</a>
				<a href="<?php the_field('telegram', 'option'); ?>" target="_blank" class="header__soc_link header__soc_telegram">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/svg/telegram.svg" alt="">
				</a>
				<a href="<?php the_field('viber', 'option'); ?>" target="_blank" class="header__soc_link header__soc_viber">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/svg/viber.svg" alt="">
				</a>
			</div>

			<a href="#" class="header__btn btn order_open">Запрос на поиск номера</a>

		</div>
	</header>