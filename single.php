<?php get_header(); ?>
    
<section class="section_blog_1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header>
                        <nav class="navbar navbar-expand-sm">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo_white.svg" class="logo">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Home </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Blog </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Info </a>
                                    </li>
                                </ul>
                                P:(800)997-9714 &nbsp;
                                <a href="#">
                                    <button class="btn button-start">START A PROJECT</button>
                                </a>
                            </div>
                        </nav>
                    </header>
                    <div class="col-md-5">
                        <p class="description">Secrets & Ideas</p>
                        <p class="description12">This is how we see the world.</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12 flex text-center">
            <div class="loop">
                <?php if ( have_posts() ) {?>
                    <?php while ( have_posts() ) { the_post(); ?>

                        <?php get_template_part('template_parts/content');?>

                    <?php } ?>
                <?php } else { ?>

                    <?php get_template_part('template_parts/content','error');?>

                <?php } ?>

            </div>
        </div>
    </div>
</div>
    
<?php get_footer() ;?>