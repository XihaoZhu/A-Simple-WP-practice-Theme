<h4> <?php echo get_comments_number() ?> comments in total</h4>

<?php wp_list_comments(array(
		'walker'            => null,
		'max_depth'         => '',
		'style'             => 'ul',
		'callback'          => 'custom_comment',
		'end-callback'      => null,
		'type'              => 'all',
		'page'              => '',
		'per_page'          => '5',
		'avatar_size'       => 32,
		'reverse_top_level' => null,
		'reverse_children'  => '',
		'format'            => current_theme_supports( 'html5', 'comment-list' ) ? 'html5' : 'xhtml',
		'short_ping'        => false,
		'echo'              => true,
	)) ?>

<?php the_comments_navigation(array(
				'prev_text'          => __( 'Older comments' ),
				'next_text'          => __( 'Newer comments' ),
				'screen_reader_text' => __( 'Comments navigation' ),
				'aria_label'         => __( 'Comments' ),
				'class'              => 'comment-navigation',
			)) ?>

<?php comment_form(
	array(
		"fields"=>array(
			"author"=>"Type in your name: <input name='author'>",
			"email"=>"Type in your email address: <input name='email'>"
		)	
	)
) ?>