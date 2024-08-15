<?php get_header() ?>

<div id="content">
    
<?php echo get_template_part('template-part/areaTalents', null, array('slug' => 'affiliated_talent')); ?>
<?php echo get_template_part('template-part/areaTalents', null, array('slug' => 'storage')); ?>
    
</div>
<!-- #content -->

<?php get_footer() ?>