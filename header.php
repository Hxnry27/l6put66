<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php wp_head();?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen">
    <title>Hello, world!</title>
    </head>
    
    <body>
    <nav class="navbar">   

      <img src="<?= wp_get_attachment_url(get_field('hl_logo'));?>" class="card-img-top ms-4" alt="...">
        
        <?php
           wp_nav_menu( array( 
            'header' => 'Header', 
            'footer' => 'Footer' ) ); 
        ?>
    
    </nav> 

