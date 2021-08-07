<?php get_header(); ?>

  <div id="primary" class="content-area extended">
      
    

    <main id="main" class="site-main" role="main">
<div class="portfolio-container" >
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

          <header class="entry-header">

       

          </header>

          <div class="entry-content" >
<div class="work-thumbnail-container">
           <?php the_post_thumbnail( 'full' ); ?>
            
        </div>
            <div class="work-content-container">
                <div>
           
            </div>
            <div>
            <?php the_content(); ?>
            </div>
            <div>
            <p>
              <a class="button" href="<?php the_field( 'url' ); ?>">
                <?php esc_html_e( 'Check it Out!', 'wphierarchy' ); ?>
              </a>
            </p>
            </div>
            </div>
          </div>

        </article>


      <?php endwhile; endif; ?>

      <p>Template: single-work.php</p>
      
      </div> 

    </main>

  </div>

<?php get_footer(); ?>
