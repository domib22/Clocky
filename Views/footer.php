<?php
function foot() {
  $start_year = 2020; 
  $current_year = date("Y"); 
  $name = "<strong>Clocky</strong>";
  if ($current_year == $start_year) { 
    print "&#169; ". $current_year ." by ". $name ." "; 
  } else {
    print "&#169; ". $start_year ." - ". $current_year ." by ". $name ." ";
  }
}
?>

<link rel="Stylesheet" type="text/css" href="../Public/css/footer.css" />
    <div class="footer">
        <br/><?php foot(); ?>
    </div>