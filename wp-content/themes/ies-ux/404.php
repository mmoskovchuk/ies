<!DOCTYPE html>
<html <?php language_attributes(); ?> class="page-404">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title><?php bloginfo('name') . ' | ' . wp_title(); ?></title>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	<link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.min.css">

	<?php //wp_head(); ?>
</head>

<body>

	<div class="page-404__container">
		<div class="page-404__img-top">
			<img src="<?php bloginfo('template_directory'); ?>/img/404.jpg" alt="Page not found" title="Page not found" />
		</div>

		<div class="page-404__text">please, try going back to the <br/><a href="/">main page</a> or to the <a href="/order">order page</a></div>

		<div class="page-404__img-bottom">
			<img src="<?php bloginfo('template_directory'); ?>/img/404-hat.jpg" alt="" />
		</div>
	</div>

	<?php //wp_footer(); ?>

</body>
</html>
