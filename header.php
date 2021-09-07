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
<header class="container">
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="h6"><small style="font-size: 9px;">確かな技術と柔軟な発想で費用対効果の高いシステムを提供します | 悠技電装</small></h1>
    <p class="text-center">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/header/logo.jpg"/></a>
    </p>
    <!-- ここからSPメニュー -->
    <div class="hamburger" id="js-hamburger">
      <span class="hamburger__line hamburger__line--1"></span>
      <span class="hamburger__line hamburger__line--2"></span>
      <span class="hamburger__line hamburger__line--3"></span>
    </div>
    <ul class="sp-nav">
      <a href="<?php echo home_url(); ?>" <?php if(is_front_page() && is_home()): ?> class="" <?php else: ?> class="" <?php endif; ?>>
        <li class="sp-nav-item">ホーム</li>
      </a>
      <a href="<?php echo home_url(); ?>/service" <?php if(is_page('service')): ?> class="" <?php else: ?> class="" <?php endif; ?>>
        <li class="sp-nav-item">業務内容</li>
      </a>
      <a href="<?php echo home_url(); ?>/jisseki" <?php if(is_page('jisseki')): ?> class="" <?php else: ?> class="" <?php endif; ?>>
        <li class="sp-nav-item">実績</li>
      </a>
      <a href="<?php echo home_url(); ?>/voice" <?php if(is_page('voice')): ?> class="" <?php else: ?> class="" <?php endif; ?>>
        <li class="sp-nav-item">お客様の声</li>
      </a>
      <a href="<?php echo home_url(); ?>/company" <?php if(is_page('company')): ?> class="" <?php else: ?> class="" <?php endif; ?>>
        <li class="sp-nav-item">会社概要</li>
      </a>
      <a href="<?php echo home_url(); ?>/contact" <?php if(is_page('contact')): ?> class="" <?php else: ?> class="" <?php endif; ?>>
        <li class="sp-nav-item">お問い合わせ</li>
      </a>
    </ul>
    <!-- ここまでSPメニュー -->
  </div>
</div>
</header>
<div class="global-nav">
    <ul class="headernav-container">
      <a href="<?php echo home_url(); ?>" <?php if(is_front_page() && is_home()): ?> class="nav-link current" <?php else: ?> class="nav-link" <?php endif; ?>>
        <li class="nav-item">ホーム</li>
      </a>
      <a href="<?php echo home_url(); ?>/service" <?php if(is_page('service')): ?> class="nav-link current" <?php else: ?> class="nav-link" <?php endif; ?>>
        <li class="nav-item">業務内容</li>
      </a>
      <a href="<?php echo home_url(); ?>/jisseki" <?php if(is_page('jisseki')): ?> class="nav-link current" <?php else: ?> class="nav-link" <?php endif; ?>>
        <li class="nav-item">実績</li>
      </a>
      <a href="<?php echo home_url(); ?>/voice" <?php if(is_page('voice')): ?> class="nav-link current" <?php else: ?> class="nav-link" <?php endif; ?>>
        <li class="nav-item">お客様の声</li>
      </a>
      <a href="<?php echo home_url(); ?>/company" <?php if(is_page('company')): ?> class="nav-link current" <?php else: ?> class="nav-link" <?php endif; ?>>
        <li class="nav-item">会社概要</li>
      </a>
      <a href="<?php echo home_url(); ?>/contact" <?php if(is_page('contact')): ?> class="nav-link current" <?php else: ?> class="nav-link" <?php endif; ?>>
        <li class="nav-item">お問い合わせ</li>
      </a>
    </ul>
</div>

<?php if(is_front_page() && is_home()): ?>
<div class="banner">
		<div class="banner-text">
			<div class="banner-heading" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="2000">
			確かな技術と柔軟な発想で
			</div>
			<div class="banner-sub-heading" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="2000">
			費用対効果の高いシステムを提供します
			</div>
		</div>
</div>
<?php endif; ?>

<script type="text/javascript">
	jQuery(function ($) {
		//ここに普通のjQueryの書き方で。下の行は例
		$("#js-hamburger").click(function() {
      $('.sp-nav').toggle();
      $('.hamburger__line').addClass('nav-open')
    });
	});
</script>
