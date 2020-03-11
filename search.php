<?php get_header();?>

<main class="site-main">
    
    <article class="site-content">
        
        <h1>Suchergebnisse für Ihre Suche nach: <?php echo $s ;?></h1>
        
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <?php get_template_part('template_parts/content','search');?>
        <?php endwhile; else : ?>
            <p><b>Fehler</b></p>
            <p>Es gibt keine Beitäge die Ihrer Suche entsprechen.</p>
            <p><a href="<?php ?>">Zuück zur Hauptseite</a></p>
            <p><a href="<?php ?>">Zuück zur Beitragsseite</a></p>
        <?php endif; ?>
        
        <?php previous_posts_link();?>
        <?php next_posts_link();?>
        
    </article>
</main>

<?php get_footer();?>