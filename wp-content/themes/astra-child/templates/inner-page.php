<?php

/**
 * Template Name: PAGE: Inner Page
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('inner');
    if(have_posts()) :
        while (have_posts() ) : the_post(); ?>

      <main>
        <?php the_content(); ?>
      </main>

      <?php endwhile; 
    endif; 
get_footer(); ?>