<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="apple-touch-icon-precomposed">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="apple-touch-icon-precomposed">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/text.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css" type="text/css" /> 
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" type="text/css" />
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<?php wp_head(); ?>
</head>
<body>
<header class="header">
  <h1 class="header-logo">
    <a href="<?php echo home_url(); ?>">
      <img class="logo" alt="悠技電装" src="<?php echo get_template_directory_uri(); ?>/img/header/logo.jpg"/>
    </a>
  </h1>
  <button type="button" id="header-btn" class="header-btn" title=""><span></span></button>
  <nav class="header-gnav">
    <ul class="header-gnav-list">
      <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
      <li><a href="<?php echo home_url(); ?>/service/">業務内容</a></li>
      <li><a href="<?php echo home_url(); ?>/achivements/">実績</a></li>
      <li><a href="<?php echo home_url(); ?>/blogs/">技術ブログ</a></li>
      <li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
      <li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
    </ul>
  </nav>
</header>
<?php if ( is_home() || is_front_page() ) : ?>
  <div class="main-image top">
    <h2 class="main-description">確かな技術と柔軟な発想で<br>電気制御の『あったらいいな！』<br>を叶えます。</h2>
  </div>
<?php elseif ( is_page('service') ) : ?>
  <div class="main-image service">
    <h2 class="main-description">システム構成から現地設備立上げまで<br class="pc">電気制御を一貫して行っております。<br class="pc">また既存設備の更新も対応しております。</h2>
  </div>
<?php elseif ( is_page('achivements') ) : ?>
  <div class="main-image achivements">
    <h2 class="main-description">これまでにシステム導入や<br class="pc">プログラム納入をさせて頂いた主な現場を<br class="pc">実績として掲載しております。</h2>
  </div>
<?php elseif ( is_page('blogs') ) : ?>
  <div class="main-image blogs">
    <h2 class="main-description">実際に納入や現場対応した技術的な内容を<br class="pc">ブログとして公開しております。<br class="pc">（お客様の了承を得た範囲内での掲載としております。）</h2>
  </div>
<?php elseif ( is_single() ) : ?>
  <div class="main-image blogs">
    <h2 class="main-description">ブログ</h2>
  </div>
<?php elseif ( is_page('company') ) : ?>
  <div class="main-image company">
    <h2 class="main-description">会社情報です。<br class="pc">所在地は群馬県藤岡市です。</h2>
  </div>
<?php elseif ( is_page('contact') ) : ?>
  <div class="main-image contact">
    <h2 class="main-description">お問い合わせはメールで承っております。<br class="pc">お気軽に御相談下さいませ。</h2>
  </div>
<?php endif; ?>