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
								<li class="nav-item"> <a class="nav-link" href="<?php echo get_home_url(); ?>"> Home </a>
								</li>
								<li class="nav-item"> 
                                    <a class="nav-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) );?>"> 
                                        Blog 
                                    </a>
								</li>
                            </ul>
                            P:(800) 997-9714 &nbsp;
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
    <section class="section_blog_2">
        <div class="container">
            <div class="row"> 
                <div class="col-md-8 col-sm-6 order-1" id="second">
                    <main class="site-main">
                        <article class="site-content">
                        
                            <?php 

                            if ( have_posts() ) : while (have_posts() ): the_post(); ?>
                                <?php get_template_part('template_parts/content', 'blog');?>
                            <?php endwhile; else: ?>
                                <?php get_template_part('template_parts/content', 'error');?>
                            <?php endif; ?>

                        </article>
    

                    </main>
                </div>
                <div class="col-md-4 col-sm-6 order-2 abstand-oben" id="first">
                    <nav class="site-nav abstand-links">
                        <div class="menu">
                            <ul>
                                <li class="page_item page-item-102">
                                    <span class="dunkelgrau"> 📁 Categories</span>
                                </li>
                                <li class="page_item page-item-104">
                                    <span> News ⑳</span>
                                </li>
                                <li class="page_item page-item-106">
                                    <span> Strategy ⑳</span>
                                </li>
                                <li class="page_item page-item-108">
                                    <span> Brand ⑳</span>
                                </li>
                                <li class="page_item page-item-110">
                                    <span> Site ⑳</span>
                                </li>
                                <li class="page_item page-item-112">
                                    <span> Internal ⑳</span>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    
                <div class="abstand-links abstand-oben">
                    <?php get_search_form(); ?>
                </div>
  
            </div>
        </div>
        
    </section>
    <section class="section_blog_3">
        <div class="container">
            <div class="row">
                <div class="col-12 next-prev-bar">
                <?php
                    the_posts_pagination( array(
                        'mid-size' => 2,
                        'prev_text' => __( '<', 'textdomain' ),
                        'next_text' => __( '>', 'textdomain' ),
                    ));
                ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>