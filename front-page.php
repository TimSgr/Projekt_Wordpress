<?php get_header(); ?>

<section class="section_1">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<header>
					<nav class="navbar navbar-expand-sm">
						<img src="<?php bloginfo('template_url'); ?>/img/logo_white.svg" class="logo">
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item"> <a class="nav-link" href="#"> Home </a>
								</li>
								<li class="nav-item"> <a class="nav-link" href="#"> Blog </a>
								</li>
								<li class="nav-item"> <a class="nav-link" href="#"> Info </a>
								</li>
                            </ul>
                            P:(800) 997-9714 &nbsp;
							<a href="#">
								<button class="btn button-start">START A PROJECT</button>
                            </a>
                        </div>
					</nav>
				</header>
                <div class="col-md-12 col-sm-12 col-lg-7">
                    <p class="description">A marketing and brand</p>
                    <p class="description11">creation agency.</p>
                        <p class="description_one">We don't just make logos, we make design & content</p>
                        <p class="description_one">choices that disrupt the market from the inside out.</p>
                        
                        <button class="btn button-started">Get started</button>
                        <button class="btn button-more">Learn more</button>

                </div>
            </div>
        </div>
    </div>
    <div class="text-center oben2">
            <span>•</span>
            <span>•</span>
            <span>•</span>
            <span>•</span>
    </div>
    <p class="text-center">
        <a href="#section_2"> 
            <img src="<?php bloginfo('template_url'); ?>/img/arrow_down.svg" class="arrow_down">
        </a>
    </p>
</section>

<section class="section_2" id="section_2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="heading text-center">
					<p>OUR EXPERTISE</p>
				</div>
				<div class="description1 text-center">We create amazing digital experience and help our customers reach
					<br>their goals 3x faster than our competitors.</div>
			</div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 rand text-center anzeigen">
                <img src="<?php bloginfo('template_url'); ?>/img/Website_logo.png" class="logo1 hiding_img">
                <p class="oben3">Websites</p>
                <p>We create websites for</p>
                <p>humans and humans create 
                <p>websites for us.</p>
                <p><input type="button" class="button_examples btn btn-light placeholder" value="Read More"/></p>
            </div>
            <div class="col-sm-3 rand text-center anzeigen">
                <img src="<?php bloginfo('template_url'); ?>/img/Mobile_logo.png" class="logo1 hiding_img">
                <p class="oben3">Mobile</p>
                <p>Enjoy a new mobile</p>
                <p>experience with respositive</p>
                <p>support.</p>
                <p><input type="button" class="button_examples btn btn-light placeholder" value="Read More"/></p>
            </div>
            <div class="col-sm-3 rand text-center anzeigen">
                <img src="<?php bloginfo('template_url'); ?>/img/Mobile_logo.png" class="logo1 hiding_img">
                <p class="oben3">Mobile</p>
                <p>Enjoy a new mobile</p>
                <p>experience with respositive</p>
                <p>support.</p>
                <p><input type="button" class="button_examples btn btn-light placeholder" value="Read More"/></p>
            </div>
            <div class="col-sm-3 rand text-center anzeigen">
                <img src="<?php bloginfo('template_url'); ?>/img/directionsign_logo.png" class="logo1 hiding_img">
                <p class="oben3">Design & UX</p>
                <p>We adjust each detail, so it fits</p>
                <p>your expectations.</p>
                <p><input type="button" class="button_examples btn btn-light placeholder" value="Read More"/></p>
            </div>
        </div>
    </div>
</section>


<section class="section_3">
    <div class="heading">
        <p class="text-center">PORTFOLIO</p>
        <p class="text-center">Our philosophy and expertise are best represented by our work </p>
    </div>
    <div class="container-fluid oben">
        <div class="row">

                    <?php 
                    
                    $args = array(
                        'post_type' => 'portfolio_post_type',
                        'posts_per_page' => '6',
                    );
                    
                    $loop2 = new WP_Query($args);
                        
                    if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>

                <div class="col-md-6 col-sm-6 col-lg-4 abstand">
                    <div class="container abstand">
                            <?php get_template_part('template_parts/content','portfolio');?>
                    </div>
                </div>
                <?php endwhile; else : ?>
                        <?php get_template_part('template_parts/content','error');?>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>

    <div class="text-center">
        <button class="btn  button-load">Load more</button>
    </div>
</section>



<section class="section_random">
    <p class="blog_absatz text-center">
        BLOG
    </p>
    <p class="description22 text-center">
        Some great marketing insights for you
    </p>
    <div class="container-fluid">
        <div class="row">

                <?php 
                
                $args = array(
                    'post_type' => 'blog_post_type',
                    'posts_per_page' => '3',

                );
                
                $loop2 = new WP_Query($args);
                    
                if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>

            <div class="col-md-4 abstand">
                <div class="container abstand">
                    <?php get_template_part('template_parts/content','short');?>
                </div>
            </div>
                    <?php endwhile; else : ?>
                        <?php get_template_part('template_parts/content','error');?>
                    <?php endif; wp_reset_postdata(); ?>                
        </div>
    </div>
    <div class="text-center">
        <button class="btn button-load1">Load more</button>
    </div>
</section>

<section class="section_5">
    <div class="container">
        <div class="col-12 text-center">
            <div class="heading">
                <p>TESTMONIALS</p>
            </div>

                <?php 
                
                $args = array(
                    'post_type' => 'testmonial_post_type',
                    'posts_per_page' => '1',

                );
                
                $loop2 = new WP_Query($args);
                    
                if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
            
                <?php get_template_part('template_parts/content','testmonials');?>

                <?php endwhile; else : ?>
                    <?php get_template_part('template_parts/content','error');?>
                <?php endif; wp_reset_postdata(); ?>         
            </div>
            
        </div>
    </div>
</section>

<section class="section_6">
    <div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="heading text-center">
                        <p>MEET THE TEAM</p>
                    </div>
                    <div class="description1 text-center">
                        Our team values more than big budgets.
                        <p>We do our best to meet our customers expectations, always in time</p>
                    </div>

                </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

        <?php 
                $args = array(
                    'post_type' => 'team_post_type',
                    'posts_per_page' => '4',
                );
                
                $loop2 = new WP_Query($args);
                    
                if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>

            <div class="col-12 col-sm-6 col-md-3 text-center block_ordnung">
                <?php get_template_part('template_parts/content','team');?>                
            </div>
                    <?php endwhile; else : ?>
                        <?php get_template_part('template_parts/content','error');?>
                    <?php endif; wp_reset_postdata(); ?>             
        </div>
    </div>
</section>

<section class="section_7">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="question">
                    Have you fallen in love yet?
                </p>
                <p class="fett">
                    Start a project
                </p>
                <p class="">
                    Together in pursing new knowledge, finding the answers
                </p>
                <p class="">
                    and having some fun along the way
                </p>
                <button class="btn button-started">Get started</button>
            </div>
        </div>
    </div>
</section>

<section class="section_8">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <p class="text-center">
                    GET A QUOTE
                </p>
                <p>
                    Get started right now - we'll make sure to get back to you
                </p>
                <p>
                    in the next minutes. Amazing yay!
                </p>
            </div>
        </div>
    </div>
    <form>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-row">
                        <div class="col-md-3">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3">
                        </div>
                        <div class="form-group col-md-3">
                            <input type="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-3">
                            <input class="form-control" placeholder="Company">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3">
                        </div>
                        <div class="form-group col-md-6">
                            <textarea class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn button-started">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<section class="section_9">
    <div class="text-center">
        <p>CONTACT US</p>
        <p>Please don't hestitate to contact us for more information.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="speech bottom">Headquaters
                    <p>1 Main St. SE #400 </p>
                    <p>Mineeapolis, MN 55414, United States</p>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <form class="hintergrund">
                    <p><input class="form-control" placeholder="Name"></p>
                    <p><input class="form-control" placeholder="Email"></p>
                    <p><input class="form-control" placeholder="Phone"></p>
                    <p><input class="form-control" placeholder="Company"></p>
                    <p><textarea class="form-control" placeholder="Message"></textarea></p>
                    <p><button class="btn button-started1">Send</button></p>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section_10">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <button class="btn button-more" type="button">Follow us</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_11">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p>OUR CLIENTS</p>
                    <p>We love our clients and we are proud of them</p>
                    <p>They are now a part of our family</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 d-flex justify-content-center">
                <img src="<?php bloginfo('template_url'); ?>/img/a (1).png">
            </div>
            <div class="col-12 col-sm-4 col-md-4 d-flex justify-content-center">
                <img src="<?php bloginfo('template_url'); ?>/img/b (1).png">
            </div>
            <div class="col-12 col-sm-4 col-md-4 d-flex justify-content-center">
                <img src="<?php bloginfo('template_url'); ?>/img/c (1).png">
            </div>
            <div class="col-12 col-sm-4 col-md-4 d-flex justify-content-center">
                <img src="<?php bloginfo('template_url'); ?>/img/d (1).png">
            </div>
            <div class="col-12 col-sm-4 col-md-4 d-flex justify-content-center">
                <img src="<?php bloginfo('template_url'); ?>/img/e (1).png">
            </div>
            <div class="col-12 col-sm-4 col-md-4 d-flex justify-content-center">
                <img src="<?php bloginfo('template_url'); ?>/img/f (1).png">
            </div>
        </div>
    </div>
</section>

<section class="section_12">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p>NUMBERS</p>
                    <p>Some amazing things about us you should know</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center größer">
                <p class="zahlen">12k</p>
                <p>Theme Users</p>
                <p class="kleiner">Lorem Impsum dolor sit amet,
                consectetur apidiscing elit</p>
            </div>
            <div class="col-md-3 text-center größer">
                <p class="zahlen">12k</p>
                <p>Theme Users</p>
                <p class="kleiner">Lorem Impsum dolor sit amet,
                consectetur apidiscing elit</p>
            </div>
            <div class="col-md-3 text-center größer">
                <p class="zahlen">12k</p>
                <p>Theme Users</p>
                <p class="kleiner">Lorem Impsum dolor sit amet,
                consectetur apidiscing elit</p>
            </div>
            <div class="col-md-3 text-center größer">
                <p class="zahlen">12k</p>
                <p>Theme Users</p>
                <p class="kleiner">Lorem Impsum dolor sit amet,
                consectetur apidiscing elit</p>
            </div>
        </div>
    </div>
</section>

<section class="section_13">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center">SELECT A PLAN</p>
                <p class="text-center">No credit card required. Upgrade, downgrade, or cancel anytime.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-lg-3 umriss umriss-mobile-unten" id="oben">
                <div class="kopf1 umriss-u" id="oben"> 
                    <p><span class="bold">Basic</span></p>
                    <p class="green">$19/mo</p>
                </div>
                <div class="informations">
                <p><span class="bold">Free</span> feature one</p>
                    <p><span class="bold">Unlimited</span> feature two</p>
                    <p><span class="bold">Unlimited</span> feature three</p>
                    <p><span class="bold">2x</span> feature four</p>
                    <p><span class="bold">100x</span> feature five</p>
                    <p><input type="button" class="btn button-load" value="select" id="verkleinern"></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 umriss-l-r umriss-mobile" id="oben">
                <div class="kopf1 umriss-l-r hellgrau" id="oben"> 
                    <p><span class="bold">Basic</span></p>
                    <p class="green">$19/mo</p>
                </div>
                <div class="informations">
                <p><span class="bold">Free</span> feature one</p>
                    <p><span class="bold">Unlimited</span> feature two</p>
                    <p><span class="bold">Unlimited</span> feature three</p>
                    <p><span class="bold">2x</span> feature four</p>
                    <p><span class="bold">100x</span> feature five</p>
                    <p><input type="button" class="btn button-load" value="select" id="verkleinern"></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 umriss-r" id="oben">
                <div class="kopf1 umriss-u grau" id="oben"> 
                    <p><span class="bold">Basic</span></p>
                    <p class="green">$19/mo</p>
                </div>
                <div class="informations">
                <p><span class="bold">Free</span> feature one</p>
                    <p><span class="bold">Unlimited</span> feature two</p>
                    <p><span class="bold">Unlimited</span> feature three</p>
                    <p><span class="bold">2x</span> feature four</p>
                    <p><span class="bold">100x</span> feature five</p>
                    <p><input type="button" class="btn button-load" value="select" id="verkleinern"></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 umriss" id="oben">
                <div class="kopf1 umriss-u dunkelgrau" id="oben"> 
                    <p><span class="bold">Basic</span></p>
                    <p class="green">$19/mo</p>
                </div>
                <div class="informations">
                    <p><span class="bold">Free</span> feature one</p>
                    <p><span class="bold">Unlimited</span> feature two</p>
                    <p><span class="bold">Unlimited</span> feature three</p>
                    <p><span class="bold">2x</span> feature four</p>
                    <p><span class="bold">100x</span> feature five</p>
                    <p><input type="button" class="btn button-load" value="select" id="verkleinern"></p>
                </div>
            </div>
</section>
<?php get_footer(); ?>

