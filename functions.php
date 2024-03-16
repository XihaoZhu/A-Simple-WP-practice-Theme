<?php
  function my_custom_sidebar(){
    register_sidebar(
      array(
        'name' => 'test side bar',
        'id' => 'test-side-bar',
        'description' => 'Nick has no description, it\' s a test',
        'before_widget' => '<div class="widgets-content">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
      )
      );
  }
  add_action('widgets_init','my_custom_sidebar');

  function custom_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    $ava = get_avatar($comment, '48');
    $author_link = get_comment_author_link();

    ?>
    <li class="comment-list">
        <div class="avatar">
            <?php echo $ava; ?>
        </div>
        <div class="comment_content">
            <div class="comment_author">
                <?php echo $author_link; ?>
            </div>
            <div class="comment_time">
                <?php echo get_comment_time('Y-m-d H:i:s'); ?>
            </div>
        </div>
        <div class="edit-line">
            <?php
            edit_comment_link('Edit', '<p class="edit-link">', '</p>');
            ?>
            <div class="reply">
                <?php
                comment_reply_link(array_merge($args, array(
                    'reply_text' => 'Reply',
                    'after' => '<span>&darr;</span>',
                    'depth' => $depth,
                    'max_depth' => $args['max_depth']
                )));
                ?>
            </div>
        </div>
        <div class="comment-text">
            <?php comment_text(); ?>
        </div>
    </li>
    <?php
}

  function get_hits($post_id){
    $count = get_post_meta($post_id,'hits',true);
    return $count === ''?0:$count;
  }
  
  function set_hits($post_id){
    $count = get_hits($post_id);
    if ($count === 0) {
        delete_post_meta($post_id,'hits');
        add_post_meta($post_id,'hits',1);
    }else{
        update_post_meta($post_id,'hits',$count+1);
    }
    return $count;
  }
?>