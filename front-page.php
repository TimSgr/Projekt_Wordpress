<?php get_header(); ?>

<section class="erste_section">       
    <?php get_sidebar('links')?>
    <?php get_sidebar('rechts')?>
    <header>
        <div class="kopf">
            <img src="<?php bloginfo('template_url'); ?>/img/logo_white.svg" class="logo">
            <a class="zwischen" href="#"> Home </a>
            <a class="zwischen" href="#"> Blog </a>
            <a class="zwischen ende" href="#"> Info </a>
                 <?php /* abstand(80); */ ?> 
            <section class="unsichtbar">
                 P:(800)997-9714
                <a href="#">
                    <button class="btn button-start">
                        START A PROJECT
                    </button>
                </a>
            </section>
        </div>
    </header>

    <p class="description">
        A marketing and brand<br>
        creation agency.</p>
    <p class="description_one"> 
        We don't just make logos, we make design & content<br>
        choices that disrupt the market from the inside out.
    <br>
    <br>
    <button class="btn button-started"> 
        Get started
    </button>
    <button class="btn button-more">
        Learn more
    </button>
    <div class="arrow bounce">

    </div>
</section>
<section class="zweite_section">
    <?php get_sidebar('links1')?>
    <?php get_sidebar('rechts1')?>
    
    <div class="zentrieren">
        <div class="überschrift">
            OUR EXPERTISE
        </div>
        <div class="description1">
            We create amazing digital experience and help our customers reach <br>
            their goals 3x faster than our competitors.
        </div>
    </div>    

    <div class="container">
        <div class="row">
            <div class="col-sm rand">
                <img src="<?php bloginfo('template_url'); ?>/img/Website_logo.png" class="logo1">
                <p> Websites </p>
                <p> We create websites for<br>
                    humans and humans create
                    websites for us. </p>
                </div>
                <div class="col-sm rand">
                <img src="<?php bloginfo('template_url'); ?>/img/Mobile_logo.png" class="logo1">
                <p> Mobile </p>
                <p> Enjoy a new mobile<br>
                    experience with respositive
                    support. </p>
                </div>
                <div class="col-sm rand">
                
                </div>
                <div class="col-sm rand">
                <img src="<?php bloginfo('template_url'); ?>/img/directionsign_logo.png" class="logo1">
                <p> Disign & UX</p>
                <p> We adjust each detail, so it fits<br>
                    your expectations. </p>
                </div>
            </div>
        </div>
</section>