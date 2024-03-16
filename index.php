<?php
  get_header();
?>
  <div class='main-box'>
    <div class="container-main">
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
    <div class="side-bar">
      <?php
        get_sidebar()
      ?>
    </div>
  </div>
<?php
  get_footer();
?>