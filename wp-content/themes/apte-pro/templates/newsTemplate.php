<?php
/*
Template Name: All Posts
*/
get_header();
$paged = isset($_GET['paged']) ? $_GET['paged'] : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 16,
    'paged'=> $paged,
);
$query = new WP_Query($args);
?>

<div id="content">
    <div class="areaNews">
        <div class="inner">
            <div class="areaTitle">
                <h2 class="titleMain maven"><span>N</span>ews</h2>
                <p class="titleSub">お知らせ</p>
            </div>
            <div class="newsWrap">
                <?php if($query->have_posts()): ?>
                <ul class="newsList">
                    <?php while($query->have_posts()): $query->the_post(); ?>
                    <?php get_template_part('template-part/newsListItem'); ?>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>
                <?php endif; ?>
                
                <?php echo theme_pagination( $query ); ?>
            </div>
        </div>
    </div>
</div>
<!-- #content -->