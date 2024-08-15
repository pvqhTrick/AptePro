<?php 
$args = array(
    'post_type' => 'talent',
    'posts_per_page' => 12,
    'orderby' => 'rand',
);
$query = new WP_Query($args);
?>
<div class="areaCanvas">
    <div class="inner">
        <ul class="listCanvas">
            <?php 
            while ($query->have_posts()): $query->the_post(); 
            get_template_part('template-part/canvasItem');
            endwhile;
            ?>
        </ul>
        <?php get_template_part('template-part/canvasTitle'); ?>
    </div>
</div>
<!-- areaCanvas -->