<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WP theme developed by Nick</title>
  <link rel="stylesheet" href=<?php echo get_stylesheet_uri()."?ver=".rand(111,999)?>>
</head>
<body>
  <header>
    <div class="container">
      <div class="name">
        <a href=<?php
        echo home_url();
        ?>><?php
        echo bloginfo('name');
        ?></a>
      </div>
      <div class="navi">
      <?php
      get_search_form();
      ?>  
        <ul>
          <li><a href=<?php
        echo home_url();
        ?>>Home</a></li>
          <li>Where</li>
          <li>Should</li>
          <li>I take you</li>
        </ul>
      </div>
    </div>
    <?php if (is_home()){?>
    <div class="big-container">
    </div>
    <?php }?>
  </header>