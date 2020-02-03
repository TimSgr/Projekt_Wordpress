<!DOCTYPE html>
<html>
<head>
<title><?php wp_title('');?> <?php bloginfo( 'name' ); ?></title>  
    
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">    

<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<div class="container">
    <header>
        <div class="kopf">
            <img src="<?php bloginfo('template_url'); ?>/logo_white.svg" class="logo">
            <a class="links" href="#"> Home </a>
            <a class="links" href="#"> Blog </a>
            <a class="links" href="#"> Info </a>
        </div>
        <div class="zentral">
            <p><h1>A marketing and brand <br> creation agency.</h1></p>
        </div>
    </header>
</div>
