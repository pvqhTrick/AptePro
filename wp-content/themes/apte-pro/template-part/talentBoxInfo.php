<li>
    <a href="<?php the_permalink() ?>" class="hover">
        <p class="talentsPhoto"><?php the_post_thumbnail('full') ?></p>
        <h3 class="talentsName"><?php the_title() ?></h3>
        <p class="spelling"><?php echo get_field('spelling') ?></p>
    </a>
</li>