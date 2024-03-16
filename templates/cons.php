<?php
  echo "<div class='list'>";
  the_title('<h1><a href="'.get_permalink().'">','</a></h1>');
  the_excerpt();
  echo "<div class='time'>".get_the_date('Y-m-d H:m:s')."</div>";
  echo "</div>";
?>