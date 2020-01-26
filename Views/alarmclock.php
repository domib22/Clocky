<!DOCTYPE html>
<html>
  <head>
    <link href="/Public/css/alarmclock.css" rel="stylesheet">
    <script src="/Public/js/alarmclock.js"></script>
    <title>Clocky</title>
  </head>
  <body>
    <!-- [CURRENT TIME] -->
    <div id="ctime">
      <h1 class="header">BUDZIK CLOCKY</h1>
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

    <!-- [SET ALARM] -->
    <div id="tpick">
      <h1 class="header">
        SET ALARM
      </h1>
      <div id="tpick-h"></div>
      <div id="tpick-m"></div>
      <div id="tpick-s"></div>
      <div>
        <input type="button" value="Set" id="tset"/>
        <input type="button" value="Reset" id="treset" disabled/>
      </div>
    </div>

    <!-- [ALARM SOUND] -->
    <audio id="alarm-sound" loop>
      <source src="wake-up-sound.mp3" type="audio/mp3">
    </audio>
  </body>
</html>