<?php

/**
 * Template Name: PAGE: Inner Page
 */


if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header('inner');
if (have_posts()):
  while (have_posts()):
    the_post(); ?>

    <main>
      <div class="inner-container-wp">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </div>
    </main>

  <?php endwhile;
endif;
get_footer(); ?>