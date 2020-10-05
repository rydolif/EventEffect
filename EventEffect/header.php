<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/preview.jpg">


	<?php wp_head(); ?>
</head>
<body>

	<?php get_template_part( 'parts/header' ); ?>


