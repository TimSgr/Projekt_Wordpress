<article <?php post_class();?>>
    <h2><a class="blog_title1" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    
    <?php the_post_thumbnail('thumbnail',); ?>
    <p>by <?php the_author(); ?>  <?php the_time('d.m.Y');?>
    <img src="<?php bloginfo('template_url'); ?>/img/clock.png" class="logo4"> 2 April, 2014
    <img src="<?php bloginfo('template_url'); ?>/img/comment.svg" class="logo4"> 25
    </p>
    
    <?php the_content();?>
</article>