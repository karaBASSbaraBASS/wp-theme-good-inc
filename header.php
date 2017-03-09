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
					<ul>
						<li class="active"><span><a href="#">Portfolio</a></span></li>
						<li><span><a href="#">Services</a></span></li>
						<li><span><a href="#">Staff</a></span></li>
						<li><span><a href="#">Articles</a></span></li>
						<li><span><a href="#">Contacts</a></span></li>
					</ul>
				</div>
			</div>
		</div>