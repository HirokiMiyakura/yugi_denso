<?php get_header(); ?>
<main>
	<section>
		<h2 class="service-ttl">サービス<span>SERVICE</span></h2>
		<div class="inner">
			<div class="swiper">
				<div class="swiper-wrapper">
					<!-- slide1 -->
					<div class="swiper-slide">
						<div class="two-box narrow">
							<div class="two-box-item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/service/s-zumen.jpg" alt="図面設計">
							</div>
							<div class="two-box-item">
								<h3>図面設計</h3>
								<p>制御盤・配電盤等の図面を御要望に応じて設計致します。<br>
				新規設備・既存設備に関わらず対応致します。<br>
				古くて図面が無い制御盤の図面作成だけでも承っております。<br>
				使用CADはＡｕｔｏCAD LTです。</p>
							</div>
						</div>
					</div>
					<!-- /slide1 -->
					<!-- slide2 -->
					<div class="swiper-slide">
						<div class="two-box narrow">
							<div class="two-box-item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/service/s-seigyo.jpg" alt="制御盤製作">
							</div>
							<div class="two-box-item">
								<h3>制御盤・配電盤製作</h3>
								<p>設備の制御には欠かせない配電盤・制御盤の製作も承っております。<br>
			図面を基に適切に電源・制御機器を収納し、配線を行います。<br>
			必要に応じた出荷検査を行い、お客様へお届け致します。</p>
							</div>
						</div>
					</div>
					<!-- /slide2 -->
					<!-- slide3 -->
					<div class="swiper-slide">
						<div class="two-box narrow">
							<div class="two-box-item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/service/s-programming.jpg" alt="プログラム作成">
							</div>
							<div class="two-box-item">
								<h3>プログラム作成</h3>
								<p>シーケンサやタッチパネルを駆使し、その設備に合わせて使い易さ・安全性・効率（費用対効果）の面から最適なプログラムを提供いたします。<br>
			　					既にシーケンサで駆動している設備の動作変更や、シーケンサリニューアル等も対応しております。<br>
								対応可能メーカ：三菱電機/キーエンス/オムロン/富士電機/Pro-Face<br>
								上記メーカ以外でも対応可能な場合もありますので、一度お問い合わせ下さい。</p>
							</div>
						</div>
					</div>
					<!-- /slide3 -->
					<!-- slide4 -->
					<div class="swiper-slide">
						<div class="two-box narrow">
							<div class="two-box-item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/service/s-genba.jpg" alt="現場調整・試運転作業">
							</div>
							<div class="two-box-item">
								<h3>現場調整・試運転作業</h3>
								<p>現地での調整・試運転作業も承っております。<br>
			配線確認や動作確認を行い、適正な動作となるように機器のパラメータ設定やプログラムの軽微な修正を行い対応致します。</p>
							</div>
						</div>
					</div>
					<!-- /slide4 -->
					<!-- slide5 -->
					<div class="swiper-slide">
						<div class="two-box narrow">
							<div class="two-box-item">
								<img src="<?php echo get_template_directory_uri(); ?>/img/service/s-try.jpg" alt="その他">
							</div>
							<div class="two-box-item">
								<h3>その他</h3>
								<p>制御盤内の定期点検も実施しておりますので、御気軽に御相談下さい。</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /slide5 -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
				<div class="swiper-scrollbar"></div>
			</div>
		</div>
	</section>
	<section class="bg">
		<h2 class="service-ttl text-white">電気制御なら<br class="sp">お任せ下さい！</h2>
		<div class="inner">
			<div class="two-box row">
				<div class="two-box-item red">
					<img class="red-border" src="<?php echo get_template_directory_uri(); ?>/img/service/s-genba.jpg" alt="現場調整・試運転作業">
				</div>
				<div class="two-box-item">
					<!-- <h3>電気制御ならお任せ下さい！</h3> -->
					<p>図面設計から、制御盤製作・プログラム作成、現場調整・試運転作業まで<strong>幅広く対応</strong>致します。<br><br>
					また、<strong>新規設備・既存設備を問わず対応</strong>しております。<br>
					シーケンサ対応 主メーカ（三菱電機、キーエンス、オムロン、富士電機）<br>
					タッチパネル対応 主メーカ（三菱電機、キーエンス、Ｐｒｏ-ｆａｃｅ、富士電機）<br><br>
					古い既存の盤の図面作成のみでもお受け致します。<br>
					<strong>お気軽に御相談下さい。</strong></p>
				</div>
			</div>
		</div>
	</section>
	<section>
		<h2 class="service-ttl">実績・技術ブログ<span>ACHIVEMENTS / BLOGS</span></h2>
		<div class="inner">
			<div class="news-box">
				<?php $paged = get_query_var('paged')? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
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
	<section>
		<h2 class="service-ttl">アクセス<span>ACCESS</span></h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3221.4505403785324!2d139.04733675055172!3d36.15558961132048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ec085c4de85bf%3A0x529613030e40dc21!2z44CSMzcwLTE0MDEg576k6aas55yM6Jek5bKh5biC6ay855-z77yW77yR77yW!5e0!3m2!1sja!2sjp!4v1561811482630!5m2!1sja!2sjp" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>
	<section>
		<h2 class="service-ttl">お問い合わせ<span>CONTACT</span></h2>
		<div class="half-inner">
			<?php echo do_shortcode( '[contact-form-7 id="5" title="コンタクトフォーム 1"]' ); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>
