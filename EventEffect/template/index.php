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

	<section class="info" id="info">
		<div class="info__container container">
			<div class="info__list">

				<div class="info__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/info__icon4.svg" alt="">
					<p>Полная готовность <br>интерактива по таймингу <br>- гарантия по договору </p>
				</div>

				<div class="info__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/info__icon3.svg" alt="">
					<p>Уже более 7 лет <br>дерим позитивные <br>эмоции</p>
				</div>

				<div class="info__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/info__icon2.svg" alt="">
					<p>Свыше 1 000 <br>мероприятий <br>за все время работы</p>
				</div>

				<div class="info__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/info__icon1.svg" alt="">
					<p>Более 500 000 часов <br>безупречной работы <br>устройств</p>
				</div>

			</div>
		</div>
	</section>

	<section class="director">
		<div class="director__container container">

			<div class="director__description">
				<h2 class="director__title">Здравствуйте,<br> Меня зовут <span>Виктор Чернышев</span></h2>
				<p class="director__text">
					Я основал event-effect.ru в 2014 году. Парк наших устройств увеличивался с 
					каждым годом, и, безусловно, это не предел! Сейчас мы можем предложить различные 
					интерактивы и активности для того, чтобы Ваше мероприятие было веселым, ярким и 
					незабываемым! 
					<br>Мне и моей команде нравится дарить людям позитивные эмоции, и мы 
					рады Вам показать каждый шаг, который делается у нас в компании.  Буквально, как 
					компания дышит.  Об этом Вы можете прочесть в моих социальных сетях.
					Будем рады помочь в организации мероприятий любого формата и масштаба.
				</p>
				<div class="director__soc">
					<b>Подписывайтесь на мои социальные сети:</b>
					<a href="#" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="">
					</a>
					<a href="#" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.svg" alt="">
					</a>
				</div>
			</div>

			<div class="director__img">
				<div class="parallax parallax__circle"></div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/director__img.png" alt="">
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

	<section class="application">
		<div class="application__container container">
			
			<div class="application__content">
				<h2 class="application__title"><span>Оставьте заявку</span></h2>
				<div class="application__subtitle">
					наш менеджер свяжется с вами и предложит
					<br>условия от которых вы не сможете отказаться!
				</div>

				<form class="application__form">
					<div class="application__input">
						<input type="text" name="name" placeholder="Имя" required>
					</div>
					<div class="application__input">
						<input type="tel" name="phone" placeholder="Телефон" required>
					</div>
					<div class="application__input">
						<input type="email" name="mail" placeholder="E-mail" required>
					</div>
					<div class="application__input">
						<button class="application__btn">ОТПРАВИТЬ ЗАЯВКУ</button>
					</div>
				</form>
			</div>

			<div class="application__img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/application__img.png" alt="">
			</div>

		</div>
	</section>

<?php get_footer(); ?>