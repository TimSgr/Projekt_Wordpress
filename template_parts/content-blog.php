<div class="new_class">
    <div class="text_links">
        <a href="<?php echo get_permalink(); ?>"><h3> <?php the_title()?> </h3></a>
        <p>  
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
        by <?php the_author(); ?>
        <img src="<?php bloginfo('template_url'); ?>/img/clock.png" class="logo4">
        <?php echo get_the_date('F j, Y'); ?>
        <img src="<?php bloginfo('template_url'); ?>/img/comment.svg" class="logo4">
        <?php echo get_comments_number(); ?>
    <p>
    <div class="thumbnail_t">
        <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <?php the_excerpt(); ?>
    </div>
</div>    
