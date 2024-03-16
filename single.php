<?php
  get_header();
?>
  <div class='main-box'>
    <div class="container-main">

      <div id="contents" class="white-background">
      <?php
        the_post();
        the_title('<h1>','</h1>');
        echo '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'"> '.get_the_author().' </a>';
        echo get_the_date('Y-m-d h-m-s');
        ?>
        <div>
          Views: (
            <?php
              echo set_hits(get_the_ID());
              ?>
          )
        </div>
        <?php
        echo '<br/>';
        the_content();

        wp_link_pages();

        // print_r(get_the_category(get_the_ID()));
        ?>      
      </div>

      <div class="card-box comments white-background">
        <?php
          comments_template();
        ?>
      </div>

      <div id="navigation" class="white-background">
      <?php
        the_post_navigation(
          array(
            'prev_text'          => '<span class="nav-subtitile">Last article:</span><span class="nav-title">%title</span>',
            'next_text'          => '<span class="nav-subtitile">Next article:</span><span class="nav-title">%title</span>',
            'in_same_term'       => false,
            'excluded_terms'     => '',
            'taxonomy'           => 'category',
            'screen_reader_text' => __( 'Post navigation' ),
            'aria_label'         => __( 'Posts' ),
            'class'              => 'post-navigation',
          )
        )
      ?>
      </div>

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