<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="Stylesheet" type="text/css" href="../Public/css/menu.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/4bfcc98eca.js" crossorigin="anonymous"></script>
</head>

<div class="menu">
  <div id="nav-icon">
      <span><i class="fa fa-bars"></i></span>
      <a href="?page=logout" class="out"> <img src="../Public/img/Backward arrow.svg"> </a>
      <a href="#" class="user"> <img src="../Public/img/User.svg"> </a>
  </div>
  <div class="left-menu">
      <ul>
          <li>
                <img src="../Public/img/S_Clocky.svg">
          </li>
          <li>
                <br/>
          </li>
          <li>
                <a href="#"><strong>O Clocky</strong></a>
          </li>
          <li>
              <hr>
          </li>
          <li>
                <a href="?page=alarmclock"><strong>Budzik</strong></a>
          </li>
          <li>
              <hr>
          </li>
          <li>
              <a href="#"><strong>Aplikacja</strong></a>
          </li>
          <li>
              <hr>
          </li>
          <li>
              <a href="#" target="_blank"><strong>Kontakt</strong></a>
          </li>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../Public/js/sliiide.min.js"></script>
<script>

$('.left-menu').sliiide({place: 'left', toggle: '#nav-icon span', body_slide: false});
</script>
</body>
</html>