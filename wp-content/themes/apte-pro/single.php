<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<div id="content">
	<div class="areaNews">
		<div class="inner">
			<div class="areaTitle">
				<h2 class="titleMain maven"><span>N</span>ews</h2>
				<p class="titleSub">お知らせ</p>
			</div>
			<div class="newsWrap">
				<div class="newsContent">
					<div class="newsContentWrap">
						<p class="contTime"><?php echo get_the_date() ?></p>
						<h1 class="contTitle"><?php the_title() ?></h1>
						<?php the_content() ?>
					</div>
				</div>

				<?php echo mytheme_post_nav(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>