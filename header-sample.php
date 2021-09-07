<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/boots.css" type="text/css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<?php wp_head(); ?>
<script>
  // conditionizr.com
  // configure environment tests
  conditionizr.config({
      assets: '<?php echo get_template_directory_uri(); ?>',
      tests: {}
  });
</script>
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-xl">
  <h1 class="text-center">
		<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.jpg" height="120"/></a>
	</h1>
  <button class="btn btn-primary d-xl-none d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      メニュー
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav3">
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url(); ?>" <?php if(is_front_page() && is_home()) echo 'class="current"'; ?>>ホーム</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url(); ?>/service" <?php if(is_page('service')) echo 'class="current"'; ?>>業務内容</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url(); ?>/jisseki" <?php if(is_page('jisseki')) echo 'class="current"'; ?>>実績</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo home_url(); ?>/voice" <?php if(is_page('voice')) echo 'class="current"'; ?>>お客様の声</a>
      </li>
			<li class="nav-item">
          <a class="nav-link" href="<?php echo home_url(); ?>/company" <?php if(is_page('company')) echo 'class="current"'; ?>>会社概要</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#<?php echo home_url(); ?>/contact" <?php if(is_page('contact')) echo 'class="current"'; ?>>お問い合わせ</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<div class="banner">
	<div class="container">
		<div class="banner-text">
			<div class="banner-heading" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="2000">
			確かな技術と柔軟な発想で
			</div>
			<div class="banner-sub-heading" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="2000">
			費用対効果の高いシステムを提供します
			</div>
		</div>
	</div>
</div>
