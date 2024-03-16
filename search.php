<?php
  get_header();
?>

  <div class='main-box'>
    <span class="search"> Result for "<?php echo get_search_query()?>" </span>
      <?php
        while (have_posts()){
          the_post();
          get_template_part('templates/cons');
        };

        the_posts_pagination( array(
          'mid_size' => 1,
          'prev_text' => 'last page',
          'next_text' => 'next page',
          'screen_reader_text' => ' '
        ));
        ?>
  </div>
<?php
  get_footer();
?>