<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
          <h1 class="blog-title-h"><?php wp_title( '' ); ?></h1>
<div class="home-container">
    

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>


      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

    </div>
    <div class="pagination-container">
    
      <?php echo paginate_links(); ?>
      </div>
   

  

    </main>

  
</div> 


<?php get_footer(); ?>
