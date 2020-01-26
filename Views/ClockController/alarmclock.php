<?php
    if(!isset($_SESSION['id']) and !isset($_SESSION['role'])) {
        die('You are not logged in!');
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="/Public/css/alarmclock.css" rel="stylesheet">
    <link rel="Stylesheet" type="text/css" href="../Public/css/modal.css" />
    <script src="/Public/js/alarmclock.js"></script>
    <title>Clocky</title>
  </head>
<body>
<?php include(dirname(__DIR__).'/menu.php'); ?>
<div class="box">
    <div id="ctime">
      <div>
      <!-- <h1 class="header">BUDZIK CLOCKY</h1> -->
        <img src="../Public/img/logo.svg">
      </div><br/>
      <div class="square">
        <div class="digits" id="chr">00</div>
        <div class="text">HR</div>
      </div>
      <div class="square">
        <div class="digits" id="cmin">00</div>
        <div class="text">MIN</div>
      </div>
      <div class="square">
        <div class="digits" id="csec">00</div>
        <div class="text">SEC</div>
      </div>
    </div>

   
    <div id="tpick">
      <h1 class="header"> USTAW GODZINĘ ALARMU <a href="#openModal" class="set"> <img src="../Public/img/settings.svg"> </a></h1>
      <div id="tpick-h"></div>
      <div id="tpick-m"></div>
      <div id="tpick-s"></div>
      <div>
        <input type="button" value="Ustaw" id="tset"/>
        <input type="button" value="Resetuj" id="treset" disabled/>
      </div>
    </div>



    <div id="openModal" class="modalDialog">
	        <div>
            <a href="#close" title="Close" class="close">X</a>
            <div class="clock">
            <img src="../Public/img/XS_Clocky.svg">
            <h2><strong> Wybierz dźwięk budzika:</strong></h2>
          </div>
            <form action="?page=alarmclock" method="POST">
              <select id="sound" name="sound">
              <option value="1">Rooster Crow</option>
              <option value="2">Wake-up-sound</option>
              <option value="3">Gentle-wake-up-clock</option>
              <option value="4">crazy chicken</option>
              </select> <br/>
              <button type="submit" name="submit"value="submit"class="abutton"><strong>ZAPISZ</strong></button>
            </form>
          </div>
        </div>


    <audio id="alarm-sound" loop>
      <?php
      if($sounds != NULL){
        ?><source src="<?=$sounds->getPath()?>" type="audio/mp3">
        <?php
      }
      else{
      ?><source src="../Public/mp3/wake-up-sound.mp3" type="audio/mp3">
      <?php
      }?>

    </audio>
</div>
<?php include(dirname(__DIR__).'/footer.php'); ?>
</body>
</html>