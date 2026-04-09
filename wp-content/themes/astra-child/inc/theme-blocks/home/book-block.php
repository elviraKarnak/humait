<?php 

$book_query = new WP_Query([
  'post_type'      => 'book',
  'posts_per_page' => 10,
  'orderby'        => 'ID',
  'order'          => 'ASC',
]);
                                    

if ($book_query->have_posts()): 


$bookReadMoreText = get_field('book_read_more_option', 'option');
$bookReadMoreArrow = get_field('book_arrow_option', 'option');

$infoTitle = get_field('info_title_book_block');
$infoImg = get_field('info_global_icon', 'option');
$sectionTitle = get_field('title_book_blok');
$sectionBgImg = get_field('section_background_book_blok');



?>



    <section class="books-section"
      style=' background: url("<?php echo $sectionBgImg['url']; ?>") no-repeat center/cover;'>
      <div class="container text-center">
        <div class="icon-text">
          <img src="<?php echo $infoImg['url']; ?>" alt="Book Icon" height="<?php echo $infoImg['height']; ?>" width="<?php echo $infoImg['width']; ?>"><span><?php echo $infoTitle; ?></span>
        </div>
        <h2><?php echo $sectionTitle; ?></h2>

        <div class="row mt-5 gx-4 gy-md-0 gy-5">

        <?php 
          while ($book_query->have_posts()):

            $book_query->the_post();

            $book_title = get_the_title();
            $book_description = get_the_excerpt();
            $book_link = get_permalink();
            ?>

              <!-- BOOK 1 -->
                <div class="col-lg-4 col-md-6 mb-4 mt-0">
                  <div class="book-card">
                  <?php if(has_post_thumbnail()){ ?> 
                      <a href="<?php echo $book_link; ?>">
                        <?php the_post_thumbnail('full'); ?>
                      </a>

                    <?php } ?>

                    <?php if($book_title): ?>

                    <a href="<?php echo $book_link; ?>"><h4><?php echo $book_title; ?></h4></a>
                    <?php endif; ?>
                    <?php if($book_description): ?>
                      <p><?php echo $book_description; ?></p>
                    <?php endif; ?>

                    <a href="<?php echo $book_link; ?>" class="btn3">
                      <?php echo $bookReadMoreText ? $bookReadMoreText : 'Get the Book'; ?> 
                    <img src="<?php echo $bookReadMoreArrow ? $bookReadMoreArrow['url'] : get_stylesheet_directory_uri() . '/assets/images/btn3-arrow.svg'; ?>" alt="arrow" height="11" width="11"></a> 
                    
                </div>
              </div>
           <?php endwhile; ?> 

    </section>

 <?php endif; wp_reset_query(); ?> 