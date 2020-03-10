<article <?php post_class();?>>
    <h2><a class="blog_title1"><?php the_title();?></a></h2>
    
    <?php the_post_thumbnail('thumbnail',); ?>
    <p>by <?php the_author(); ?>  
    <img src="<?php bloginfo('template_url'); ?>/img/clock.png" class="logo4">
    <?php echo get_the_date('F j, Y'); ?>
    <img src="<?php bloginfo('template_url'); ?>/img/comment.svg" class="logo4">
    <?php echo get_comments_number(); ?>
    </p>
    
    <?php the_content();?>
</article>