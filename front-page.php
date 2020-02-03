<?php get_header(); ?>
    <main>
        <div class="loop">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part('template_parts/content','page');?>

            <?php endwhile; else : ?>

                <?php get_template_part('template_parts/content','error');?>

            <?php endif; ?>
        </div>
        
       <?php get_sidebar() ;?>
        
        
        <?php get_template_part('template_parts/latest-posts');?>
        
        
    </main>
<?php get_footer() ;?>