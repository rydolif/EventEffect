<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

	<section class="hero">
		<div class="hero__container container">

			<div class="hero__arrow">
				<a href="#info"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt=""></a>
			</div>

			<h1 class="hero__title">
				Интерактивные развлечения <br>для Вашего меропртиятия по привлекательным ценам 
				<span class="sity">в Москве</span>
			</h1>

			<p class="hero__subtitle">Получите скидку на наши услуги, ответив на 4 вопроса </p>
			<a href="#" class="hero__btn order__open">Получить скидку</a>
			
		</div>
	</section>

	<?php get_template_part( 'parts/info' ); ?>

	<section class="director">
		<div class="director__container container">

			<div class="director__description">
				
				<h2 class="director__title"><?php the_field('director__title', 'option'); ?></h2>
				<div class="director__text">
					<?php the_field('director__content', 'option'); ?>
				</div>
				<div class="director__soc">
					<b>Подписывайтесь на мои социальные сети:</b>
					<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
					</a>
					<a href="<?php the_field('vk', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt="">
					</a>
				</div>
			</div>

			<div class="director__img">
				<div class="parallax parallax__circle"></div>
				<img src="<?php the_field('director__img', 'option'); ?>" alt="">
			</div>

		</div>
	</section>

	<section class="services">

		<div class="parallax parallax__circle"></div>
		<div class="parallax parallax__border"></div>

		<div class="services__container container">
			
			<h2 class="services__title">Мы <span>предлагаем</span></h2>

			<div class="services__list">

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item1.jpg" alt="">
						<span>Фотобудка</span>
					</div>
					<h3 class="services__subtitle">Фотобудка</h3>
					<p class="services__text">Мобильная студия с моментальной печатью серии снимков</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item2.jpg" alt="">
						<span>Инстапринтер</span>
					</div>
					<h3 class="services__subtitle">Инстапринтер</h3>
					<p class="services__text">Печать фото с Вашим логотипом по #хэштегу из Instagram</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item3.jpg" alt="">
						<span>Bullet Time</span>
					</div>
					<h3 class="services__subtitle">Bullet Time</h3>
					<p class="services__text">Фото 180 градусов с эффектом остановки времени или бумеранга</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item4.jpg" alt="">
						<span>SlowMo 360</span>
					</div>
					<h3 class="services__subtitle">SlowMo 360</h3>
					<p class="services__text">Видео селфи 360, Видео спиннер 360, Cъемка 360 градусов со спецэфектами.</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item5.jpg" alt="">
						<span>Неоновый туннель</span>
					</div>
					<h3 class="services__subtitle">Неоновый туннель</h3>
					<p class="services__text">Идеальная площадка для съёмки сногсшибательных клипов</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item6.jpg" alt="">
						<span>Фотостена</span>
					</div>
					<h3 class="services__subtitle">Фотостена</h3>
					<p class="services__text">Фотомозайка из снимков гостей мероприятия, образующая логототип</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item7.jpg" alt="">
						<span>Gif стойка</span>
					</div>
					<h3 class="services__subtitle">Gif стойка</h3>
					<p class="services__text">Компактная фотобудка, с печатью фото и созданием gif роликов, и серией новинок</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item8.jpg" alt="">
						<span>Фотозеркало</span>
					</div>
					<h3 class="services__subtitle">Фотозеркало</h3>
					<p class="services__text">Уникальное интерактивное зеркало, с возможностью съёмки в полный рост</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item9.jpg" alt="">
						<span>Фотомагниты</span>
					</div>
					<h3 class="services__subtitle">Фотомагниты</h3>
					<p class="services__text">Изготовление фотомагнитов с Вашим логотипом в течении нескольких минут</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item10.jpg" alt="">
						<span>LED фотозона</span>
					</div>
					<h3 class="services__subtitle">LED фотозона</h3>
					<p class="services__text">Уникальная инсталяция с возможностью погружения в другую реальность</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item11.jpg" alt="">
						<span>Гоночки Slot-Car</span>
					</div>
					<h3 class="services__subtitle">Гоночки Slot-Car</h3>
					<p class="services__text">Интерактивные гонки на трековых авто slot-car по трассам мирового уровня</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item12.jpg" alt="">
						<span>Bubble Heads</span>
					</div>
					<h3 class="services__subtitle">Bubble Heads</h3>
					<p class="services__text">Уникальный сувенир, который понарвится абсолютно всем</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item13.jpg" alt="">
						<span>Тату принтер Prinker</span>
					</div>
					<h3 class="services__subtitle">Тату принтер Prinker</h3>
					<p class="services__text">Моментальный тату принтер, с возможностью печати любой картинки</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item14.jpg" alt="">
						<span>Little Planet</span>
					</div>
					<h3 class="services__subtitle">Little Planet</h3>
					<p class="services__text">Фотозона маленькая планета, где главный герой попадает в другой мир</p>
				</a>

				<a href="#" class="services__item">
					<div  class="services__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item15.jpg" alt="">
						<span>Флипбуки</span>
					</div>
					<h3 class="services__subtitle">Флипбуки</h3>
					<p class="services__text">Цветные фотографии, собранные в маленькую книжку, образующие клип</p>
				</a>

			</div>

		</div>
	</section>

	<section class="partners">

		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax1.png" alt="" class="parallax parallax__arrow-left">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/parallax2.png" alt="" class="parallax parallax__arrow-right">

		<div class="container">

			<h2 class="partners__title">Наши <span>заказчики и партнеры</span></h2>

			<div class="partners__slider swiper-container">
				<div class="swiper-wrapper">
					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon1.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon7.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon13.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon2.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon8.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon14.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon3.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon9.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon15.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon4.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon10.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon16.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon5.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon11.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon17.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon6.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon12.svg" alt="">
					</div>

					<div class="partners__slide swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners__icon18.svg" alt="">
					</div>
				</div>
				<div class="partners__pagination"></div>
			</div>

		</div>
	</section>

	<?php get_template_part( 'parts/application' ); ?>

<?php get_footer(); ?>