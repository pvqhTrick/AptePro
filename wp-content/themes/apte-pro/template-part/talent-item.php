<?php $img_url = ($args['isFirst']) ? get_theme_file_uri('/assets/images/index/canvas-photo-01.jpg') : get_the_post_thumbnail_url(null, 'canvas') ?>
<li>
    <a href="<?php the_permalink() ?>">
        <p class="canvasPhoto"><img src=<?php echo $img_url ?>></p>
    </a>
</li>