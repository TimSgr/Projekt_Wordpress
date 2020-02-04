<!DOCTYPE html>
<html>
<head>
<title><?php wp_title('');?> <?php bloginfo( 'name' ); ?></title>  
    
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">    
<?php include "hilfsfunktionen.php" ?>
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>


    