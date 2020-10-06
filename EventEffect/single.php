
<?php get_header(); ?>

	<section class="article">
		<div class="container">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<article class="article__content">
					<div class="article__img">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-photo.png" alt="<?php the_title(); ?>" />
						<?php } ?>
					</div>
					<div class="article__text">
						<h1 class="article__title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<time class="article__date" datetime="1969-07-16">
							<b><?php echo get_the_date('Y-m-d'); ?></b>
						</time>
					</div>
				</article>

				<?php endwhile; ?>
			<?php endif; ?>



			<h2 class="article__subtitle">Ещё больше фото! </h2>

			<div class="slider-services">
				<div class="swiper-wrapper">
					<a href="#" class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item1.jpg" alt="">
					</a>
					<a href="#" class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item2.jpg" alt="">
					</a>
					<a href="#" class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item3.jpg" alt="">
					</a>
					<a href="#" class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item4.jpg" alt="">
					</a>
					<a href="#" class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item5.jpg" alt="">
					</a>
					<a href="#" class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item6.jpg" alt="">
					</a>
					<a href="#" class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item7.jpg" alt="">
					</a>
					<a href="#" class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item8.jpg" alt="">
					</a>
					<a href="#" class="swiper-slide">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/services__item9.jpg" alt="">
					</a>
				</div>
				<!-- Add Arrows -->
				<div class="slider-services__next"></div>
				<div class="slider-services__prev"></div>
			</div>

			<div class="article__btn">
				<a href="<?php echo get_home_url(); ?>/blog/" class="">Смотреть еще</a>
			</div>

		</div>
	</section>

<?php get_footer(); ?>