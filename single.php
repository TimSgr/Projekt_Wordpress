<?php get_header(); ?>
    <main>
        <div class="loop">
            <?php if ( have_posts() ) {?>
                <?php while ( have_posts() ) { the_post(); ?>

                    <?php get_template_part('template_parts/content');?>

                <?php } ?>
            <?php } else { ?>

                <?php get_template_part('template_parts/content','error');?>

            <?php } ?>

        </div>
        
       <?php get_sidebar() ;?>
    </main>
<?php get_footer() ;?>