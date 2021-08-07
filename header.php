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
                <p><a href="#" class="logotop" title="">Logo1</a><a href="#" class="logobottom" title="">Logo 2</a></p>
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
            <a  href=   "#content"  class=  "skip-link  screen-reader-text" title="">
            
            <?php esc_html_e(   'Skip to content'   ,   'wphierarchy'  ); ?>

        </a>
        
        <div id=    "content"   class="site-content">
