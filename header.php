<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- узнать размер екрана мобильного для адаптива -->
	<title><?php bloginfo('name')?></title>
	<!-- <link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>"> непопулярный способ подгрузить файл со стилями -->
    <?php wp_head(); ?>
</head>
<body>


	<div id="wrapper">
		<div id="header">
			<div class="container clearfix">
				<div class="logo left">
					<a href="<?php echo home_url(); ?>">g</a>
					<span>
						<?php bloginfo('name')?>
					</span>
				</div>
			</div>
		</div>
		<div id="nav">
			<div class="container clearfix">
				<div class="navigation left">
					<?php wp_nav_menu(array('theme_location'=>'menu', 'container'=>'false')); ?>

				
					<!-- <?php
					$massiv_vhodnih_parametrov = array(
						'container' => false,   // - без предварительной обертки тегом
						'echo' => false,        // - вернуть меню для предварительной оработки средствами PHP
						'items_wrap' => '%3$s', // - аргумент функции формата строки sprintf()
						'depth' => 0,           // - глубина, уровень вложенности = 0
					);
					
					/* удалим из строки меню все кроме html-тега и гиперссылки */
					
					print strip_tags( wp_nav_menu($massiv_vhodnih_parametrov ), '<a>') -->
					<!-- <ul>
						<li class="active"><span><a href="#">Portfolio</a></span></li>
						<li><span><a href="#">Services</a></span></li>
						<li><span><a href="#">Staff</a></span></li>
						<li><span><a href="#">Articles</a></span></li>
						<li><span><a href="#">Contacts</a></span></li>
					</ul> -->
				</div>
			</div>
		</div>