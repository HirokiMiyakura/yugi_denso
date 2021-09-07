<?php
/*
Template Name: お問い合わせページ
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h1 class="page-title">お問い合わせ<span class="h3" data-aos="fade-right" data-aos-delay="300">Contact</span></h1>
		</div>
	</div>
</div>

<section id="conversion" class="pt-5 mb-5" style="background-color: #fafafa">
<div class="container pt-5" style="background-color: #fff">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php echo do_shortcode( '[contact-form-7 id="5" title="コンタクトフォーム 1"]' ); ?>
    </div>
	</div>
</div>
</section>

<?php get_footer(); ?>
