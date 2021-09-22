<?php get_header(); ?>
<main>
	<section>
		<h1 class="service-ttl">技術ブログ<span>BLOGS</span></h1>
		<div class="inner">
			<div class="news-box">
				<?php $paged = get_query_var('paged')? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 12,
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
          );
          $myposts = new WP_Query($args);
          if($myposts->have_posts()): while($myposts->have_posts()): $myposts->the_post();
        ?>
				<div class="news-box-item">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<div class="news-box-item-inner">
							<div class="news-box-item-inner-date"><?php echo get_the_date('Y.m.d', $post); ?></div>
							<?php if(has_category() ): ?>
								<?php
								foreach(
									(get_the_category()) as $cat){
										echo '<span class="news-box-item-inner-tag category-'.$cat->slug.'">'. $cat->cat_name . '</span>';
									}
								?>
							<?php endif; ?>
							<h2 class="news-box-item-inner-title"><?php the_title(); ?></h2>
						</div>
					</a>
				</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
