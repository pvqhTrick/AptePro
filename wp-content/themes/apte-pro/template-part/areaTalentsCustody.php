<?php 
$args = array(
    'post_type' => 'talent',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'talent-category',
            'field' => 'slug',
            'terms' => 'cat-2',
        )
    ),
);
$query = new WP_Query($args);
?>

<div class="areaTalents custody">
    <div class="talentsTitle">
        <div class="inner">
            <h3 class="talentsCustody">預かり</h3>
        </div>
    </div>
    <div class="inner">
    <?php if($query->have_posts()): ?>
    <ul class="listTalents">
        <?php while($query->have_posts()): $query->the_post(); ?>
        <?php get_template_part('template-part/talentBoxInfo'); ?>
        <?php endwhile; wp_reset_postdata();?>
    </ul>
    <?php endif; ?>
    </div>
</div>
<!-- areaTalents custody -->