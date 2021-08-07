<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <h1><?php the_archive_title(); ?></h1>
       <a href=" <?php the_permalink(  $post_id) ?> ">
<div class="blog-new-container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>

      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>
</div>
</a>
      <?php echo paginate_links(); ?>
</div>
 

    </main>



  <?php get_sidebar(); ?>

<?php get_footer(); ?>
