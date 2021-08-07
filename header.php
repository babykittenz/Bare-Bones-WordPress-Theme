<!DOCTYPE html>

<html lang="en">

    <head>
    
        <meta charset=  "utf-8">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <link   rel=    "profile"   href=   "http://gmpg.org/xfn/11">

        <?php   wp_head();  ?>
    
    </head>
    
    <body <?php body_class();   ?>   >

        <div id=    "page"  >
        
        

            <header id= "masthead" class=   "site-header"   role=   "banner">


        

         

          
            
      
            <nav  id=   "site-navigation" class=    "main-navigation" role= "navigation">

            <div class="logo">
                <p><a href="https://millmountaindigital.com" class="logotop" title="Mill Mountain Digital">MM</a><a href="https://millmountaindigital.com" class="logobottom" title="Mill Mountain Digital">Digital</a></p>
            </div>

<?php 

    $args = [
    'theme_location'    =>  'main-menu',
    'container'         =>  false,
   

    
    

    ];

    wp_nav_menu(   $args   );  
    
    
    
    
    
    ?>

<div class="mobile-menu-icon">
                <div class="hamburger-menu">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>

</nav>

      
            

              
        
            </header>
            <a  href=   "#content"  class=  "skip-link  screen-reader-text" title="Mill Mountain Digital Content">
            
            <?php esc_html_e(   'Skip to content'   ,   'millmountain'  ); ?>

        </a>
        
        <div id=    "content"   class="site-content">
