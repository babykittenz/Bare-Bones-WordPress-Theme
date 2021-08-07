<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
<div class="new-container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="notice-me">
        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
</div>
      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

    
</div>
    </main>

  </div>



<?php get_footer(); ?>
