<!DOCTYPE html>
<html>
<head>
<title><?php wp_title('');?> <?php bloginfo( 'name' ); ?></title>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">    
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">    
<?php include "hilfsfunktionen.php" ?>
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>


    