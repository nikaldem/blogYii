<!DOCTYPE html>
<html>

<head>
	<title><?=$this->pageTitle ?></title>
	<meta name="description" content="website description" />
	<meta name="keywords" content="website keywords, website keywords" />
	<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
	<link rel="stylesheet" type="text/css" href="<?=Yii::app()->theme->baseUrl ?>/css/style.css" />
	<!-- modernizr enables HTML5 elements and feature detects -->
	<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl ?>/js/modernizr-1.5.min.js"></script>
</head>

<body>
<div id="main">

	<header>
		<div id="strapline">
			<div id="welcome_slogan">
				<h3><?=$this->pageTitle ?></h3>
			</div><!--close welcome_slogan-->
		</div><!--close strapline-->
		<nav>
			<div id="menubar">

				<?php $this->widget('zii.widgets.CMenu',array(
					'id' => 'nav',
					'activeCssClass' => 'current',
					'items'=>array(
						array('label'=>'Home', 'url'=>array('post/index')),
						array('label'=>'About', 'url'=>array('site/page', 'view'=>'about')),
						array('label'=>'Contact', 'url'=>array('site/contact')),
						array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
			</div><!--close menubar-->
		</nav>
	</header>

	<div id="slideshow_container">
		<div class="slideshow">
			<ul class="slideshow">
				<li class="show"><img width="940" height="250" src="<?=Yii::app()->theme->baseUrl ?>/images/home_1.jpg" alt="&quot;Enter your caption here&quot;" /></li>
				<li><img width="940" height="250" src="<?=Yii::app()->theme->baseUrl ?>/images/home_2.jpg" alt="&quot;Enter your caption here&quot;" /></li>
			</ul>
		</div><!--close slideshow-->
	</div><!--close slideshow_container-->

	<div id="site_content">

		<div class="sidebar_container">
			<div class="sidebar">
				<div class="sidebar_item">
					<h2>Календарь</h2>
					<p>Пока нет</p>
				</div><!--close sidebar_item-->
			</div><!--close sidebar-->
			<div class="sidebar">
				<div class="sidebar_item">
					<h2>Авторизация</h2>
					<h3>Май 2010</h3>
					<p>Логин Пароль</p>
				</div><!--close sidebar_item-->
			</div><!--close sidebar-->
			<div class="sidebar">

			</div><!--close sidebar-->
			<div class="sidebar">

			</div><!--close sidebar-->
		</div><!--close sidebar_container-->

		<div id="content">
			<div class="content_item">
				<?=$content ?>

			</div><!--close content_item-->
		</div><!--close content-->
	</div><!--close site_content-->

	<footer>
		<a href="index.html">Home</a> | <a href="ourwork.html">Our Work</a> | <a href="testimonials.html">Testimonials</a> | <a href="projects.html">Projects</a> | <a href="contact.html">Contact</a><br/><br/>
		<a href="http://fotogrph.com">Images</a> |  <a href="http://www.heartinternet.co.uk/vps/">Virtual Server</a>  | website template by <a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>
	</footer>

</div><!--close main-->

<!-- javascript at the bottom for fast page loading -->
<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=Yii::app()->theme->baseUrl ?>/js/image_slide.js"></script>

</body>
</html>