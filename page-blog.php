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
    <section class="section_blog_2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 order-1" id="second">
                    <main class="site-main">
                        <article class="site-content">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part('template_parts/content','page');?>
                            <?php endwhile; else : ?>
                                <?php get_template_part('template_parts/content','error');?>
                            <?php endif; ?>
                            
                            <?php 

                            $args = array(
                                post_type => 'blog_post_type',
                                posts_per_page => 2
                            );
                            
                            $next_post = get_next_post();
                            $next_post_id = $next_post->ID;
                            
                            $loop2 = new WP_Query($args);
                            
                            if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
                            <?php get_template_part('template_parts/content', 'blog');?>
                            <?php endwhile; else : ?>
                                <?php get_template_part('template_parts/content','error');?>
                            <?php endif; wp_reset_postdata(); ?>
                        </article>
    

                </main>
                </div>
                <div class="col-md-4 col-sm-6 order-2" id="first">
                    <nav class="site-nav">
                        <div class="menu">
                            <ul>
                                <li class="page_item page-item-102">&nbsp;
                                    <span> 📁 Categories</span>
                                </li>
                                <li class="page_item page-item-104">&nbsp;
                                    <span> News ⑳</span>
                                </li>
                                <li class="page_item page-item-106">&nbsp;
                                    <span> Strategy ⑳</span>
                                </li>
                                <li class="page_item page-item-108">&nbsp;
                                    <span> Brand ⑳</span>
                                </li>
                                <li class="page_item page-item-110">&nbsp;
                                    <span> Site ⑳</span>
                                </li>
                                <li class="page_item page-item-112">&nbsp;
                                    <span> Internal ⑳</span>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    
                    <form>
                        <input type="text" name="search" class="this_searchbar" placeholder="Search..">
                    </form>

                </div>
            </div>
        </div>
        
    </section>
    <section class="section_blog_3">
        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-center text-center next-prev-bar">
                    <button class="btn">❮</button>
                    <button class="btn green-bg">1</button>
                    <button class="btn">2</button>
                    <button class="btn">3</button>
                    <button class="btn">❯</button>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>