<?php get_header(); ?>
<?php
	$category = get_the_category();
  $cat = $category[0];
 	$cat_name = $cat->name;
 	$cat_id = $cat->cat_ID;
 	$cat_slug = $cat->slug;
?>
<main>
	<article class="single-outer">
		<div class="inner">
			<ul class="single-info">
				<li class="cat"><?php echo $cat_name; ?></li>
				<li><?php echo the_time('Y-m-d'); ?></li>
			</ul>
			<h1><?php the_title(); ?></h1>
			<div class="single-inner">
				<?php the_content(); ?>
			</div>
		</div>
	</article>
</main>
<?php get_footer(); ?>
