<?php 
$args = array(
    'post_type' => 'talent',
    'posts_per_page' => 11,
    'orderby' => 'rand',
);

$query = new WP_Query($args);
?>
<div class="areaCanvas">
    <div class="inner">
        <ul class="listCanvas">
            <?php 
            echo the_first_thumbnail();
            while ($query->have_posts()): $query->the_post(); 
            echo get_template_part('template-part/canvasItem');
            endwhile;
            ?>
        </ul>
        <?php echo get_template_part('template-part/canvasTitle'); ?>
    </div>
</div>
<!-- areaCanvas -->