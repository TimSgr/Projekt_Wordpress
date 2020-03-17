<div class="new_class">
    <a href="<?php echo get_permalink(); ?>"><h3> <?php the_title()?> </h3></a>
    <p>by <?php the_author(); ?>  
    <img src="<?php bloginfo('template_url'); ?>/img/clock.png" class="logo4">
    <?php echo get_the_date('F j, Y'); ?>
    <img src="<?php bloginfo('template_url'); ?>/img/comment.svg" class="logo4">
    <?php echo get_comments_number(); ?>
    <p>
    <div class="thumbnail_t">
        <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <p>
    &nbsp;<?php the_excerpt(); ?>
    
 
    </p>
</div>    
