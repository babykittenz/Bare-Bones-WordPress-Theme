
<div class="where-container">
<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">
     <div>
       <a href=" <?php the_permalink(  $post_id) ?> "> <?php the_post_thumbnail( 'medium' ); ?> </a>
       </div>

    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

    <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>

    <div class="byline">
      <?php esc_html_e( 'Author:' ); ?> <?php the_author_posts_link(); ?>
    </div>

  </header>

  <div class="entry-content">

    <?php the_excerpt(); ?>

  </div>


</article>
</div>