<?php get_header(); ?>
    <main>
      <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
          get_template_part( 'content', 'single' );
        endwhile;
        else :
          get_template_part('nullcontent');
        endif;
      ?>
    </main>
<?php get_footer(); ?>
