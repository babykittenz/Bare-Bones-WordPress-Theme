<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );
add_theme_support(  'wp-mail' );




// FONTS


function wpb_add_google_fonts() {
   wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );
   }
   
   add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
   
   
// Load in our CSS
function wphierarchy_enqueue_styles() {

  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], '1.1', 'all' );

}
add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles' );


// Register Menu Locations
register_nav_menus( [
  'main-menu' => esc_html__( 'Main Menu', 'wpheirarchy' ),
]);

 function gratefultest_enqueue_scripts() {

        wp_enqueue_script(  'theme-js'  ,  get_stylesheet_directory_uri()   .  '/assets/js/theme.js'    ,   []  ,   '1.1'  ,   true    );

      



    }

    add_action( 'wp_enqueue_scripts'    ,   'gratefultest_enqueue_scripts');


// Setup Widget Areas
function wphierarchy_widgets_init() {
  register_sidebar([
    'name'          => esc_html__( 'Main Sidebar', 'wphierarchy' ),
    'id'            => 'main-sidebar',
    'description'   => esc_html__( 'Add widgets for main sidebar here', 'wphierarchy' ),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
  ]);
  register_sidebar([
    'name'          => esc_html__( 'Page Sidebar', 'wphierarchy' ),
    'id'            => 'page-sidebar',
    'description'   => esc_html__( 'Add widgets for page sidebar here', 'wphierarchy' ),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
  ]);
  register_sidebar([
    'name'          => esc_html__( 'Front Page Widgets', 'wphierarchy' ),
    'id'            => 'front-page',
    'description'   => esc_html__( 'Add widgets for the front page here', 'wphierarchy' ),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
  ]);
  
  register_sidebar(   [
            'name'          =>  esc_html__( 'Footer Sidebar'  ,   'gratefultest' )    ,
            'id'            =>  'footer-sidebar'  ,
            'description'   =>  esc_html__( 'Add Widgets For Footer Sidebar Here' ,   'gratefultest'  )   ,
            'before_widget' =>  '<section class="widget">'  ,
            'after_widget'  =>  '</section>'    ,
            'before_title'  =>  '<p  class="widge-title">'  ,
            'after_title'   =>  '</p>' ,
                    ]  );
}
add_action( 'widgets_init', 'wphierarchy_widgets_init' );






function process_contact_form() {

    $name        = $_POST['name'];
    $message     = $_POST['message'];
    $business    = $_POST['business'];
    $jobType     = $_POST['jobtype'];
    $theEmail    = $_POST['theemail'];
    $phone       = $_POST['phone'];
    $to          = [ "contact@millmountaindigital.com" ];
    $subject     = ''.$business;
    $mybody      = '';
    $mybody .='<table>';
    $mybody .='';
    $mybody .='<p>LEADS HOOOOO!!!.</p>';
    $mybody .='<tr><td><b>Name:</b></td><td>'.$name.'</td></tr>';
    $mybody .='<tr><td><b>Job:</b></td><td>'.$jobType.'</td></tr>';
    $mybody .='<tr><td><b>Company Email:</b></td><td>'.$theEmail.'</td></tr>';
    $mybody .='<tr><td><b>Phone:</b></td><td>'.$phone.'</td></tr>';
    $mybody .='<tr><td><b>Business:</b></td><td>'.$business.'</td></tr>';
    $mybody .='<tr><td><b>Message:</b></td><td>'.$message.'</td></tr>';
   
    $mybody .='<p>Thank you,</p>';
    $mybody .='<p></p>';
    $mybody .='</table>';
    $body = $mybody;
    $headers = array('Content-Type: text/html; charset=UTF-8');
 
    
    $sendStatus = wp_mail( $to, $subject, $body, $headers );

    if ( $sendStatus ){
        wp_redirect( '/about-us/', 301);
        exit;
    }


}
    add_action( 'wp_ajax_process_contact_form', 'process_contact_form' );
    add_action( 'wp_ajax_nopriv_process_contact_form', 'process_contact_form' );
    
    
    
    
    
    add_action('wp_ajax_nopriv_custom_register', 'custom_register');
add_action('wp_ajax_custom_register', 'custom_register');

function custom_register(){

    //process

    $url = home_url(); 

    ?>
       <script>

        demo(); //function name of jscript

        function demo()
        {
            window.location="<?php echo $url ?>";
        }

       </script>

    <?php exit;
}











?>
