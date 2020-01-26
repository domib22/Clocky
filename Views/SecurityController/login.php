<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/modal.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4bfcc98eca.js" crossorigin="anonymous"></script>
    <title>Clocky</title>
</head>

<body>
<div class="container">
    <div class="logo">
        <img src="../Public/img/logo.svg">
        <img src="../Public/img/CLOCKY.svg">
    </div>
    <div class="block-log">
    <form action="?page=login" method="POST">
        <div class="messages">
            <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
            ?>
        </div>
        <p><img src="../Public/img/witaj w Clocky!.svg"></p>
        <input name="email" class="input" type="text" placeholder="Email">
        <input name="password" class="input" type="password" placeholder="Hasło">
        <button type="submit"><strong>ZALOGUJ SIĘ</strong></button>
        <button type="button"><strong> ZALOGUJ SIĘ PRZEZ GOOGLE</strong></button>
        <!-- <i class="fab fa-google-plus-g"></i> -->
    </form>
    <p>Jesteś tu nowy?</p>
    <a href="?page=register" class="button2">REJESTRACJA</a>
    </div>
</div>
<?php include(dirname(__DIR__).'/footer.php'); ?>
</body>
</html>