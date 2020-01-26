<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/modal.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/menu.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4bfcc98eca.js" crossorigin="anonymous"></script>
    <script src="../Public/js/disabled.js"></script>
    <title>Clocky</title>
</head>
<body>

<div class="container">
    <div class="block-reg">
        <form action="?page=register" method="POST" name="formularz">
            <div class="messages">
                <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                ?>
            </div>
            <h1> Stwórz konto</h1>
            <input name="name" class="input" type="text" placeholder="Imię">
            <input name="surname" class="input" type="text" placeholder="Nazwisko">
            <input name="email" class="input" type="text" placeholder="Email">
            <input name="password" class="input" type="password" placeholder="Hasło">
            <input name="repeatpassword" class="input" type="password" placeholder="Powtórz hasło">
            <br/><br/>Zaznacz jeśli akceptujesz <a href="#openModal"><strong>REGULAMIN</strong></a> (wymagane)
            <input type="checkbox" name="regulamin" id="ch" onclick="dis();" checked>
            <br/><br/><button type="submit" id="reg"><strong>ZAREJESTRUJ SIĘ</strong></button>
        </form>

        <div id="openModal" class="modalDialog">
	        <div>
		        <a href="#close" title="Close" class="close">X</a>
		        <h2><img src="../Public/img/XS_Clocky.svg"><strong> Regulamin</strong></h2>
		        <p><h5><strong>§ Lorem ipsum</strong></h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim nisl ac metus venenatis, nec aliquam dolor aliquam. Ut gravida diam ac ligula vehicula blandit. Etiam massa nunc, fermentum nec ante quis, lobortis facilisis purus. Phasellus porttitor tristique tempor. Donec viverra nisi libero, vel posuere enim tristique faucibus. Integer sagittis enim sed mollis ultricies. Nunc magna mi, placerat ac nunc vel, fermentum lacinia purus.</p>
		        <p><h5><strong>§ Cras mattis</strong></h5>Cras mattis arcu sem, ut faucibus arcu scelerisque eget. Nam nec nibh velit. Nullam fermentum elit mauris, in viverra elit convallis a. Sed cursus varius pharetra. Duis purus purus, dapibus ac interdum porta, dictum quis ipsum. Morbi vel mi scelerisque, posuere lorem et, commodo tellus. Nunc in orci id dui eleifend semper ac a orci. Ut interdum enim nec magna efficitur malesuada. Suspendisse potenti. Morbi feugiat pretium pharetra. Praesent lobortis tincidunt diam, a sodales felis sodales id. Vivamus hendrerit volutpat purus, eget congue mi ultricies ut. Morbi suscipit metus sed turpis tempor, non posuere mauris pharetra. Morbi quis lorem at justo egestas aliquam.</p>
                <p><h5><strong>§ Vivamus vehicula</strong></h5>Vivamus vehicula ut nibh nec tincidunt. Aliquam non nisi arcu. Duis ac euismod ante. Praesent mollis rhoncus ex, in commodo felis. Praesent aliquam sodales erat, in bibendum odio interdum quis. Duis dapibus tincidunt facilisis. Sed pulvinar congue velit id fringilla.</p>        
                <p><h5><strong>§ Pellentesque porta</strong></h5>Pellentesque porta odio a efficitur maximus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent semper rutrum mauris, sed efficitur lorem pharetra sit amet. Duis tincidunt ut nibh at consectetur. Nam varius orci id maximus maximus. Phasellus id dolor posuere, posuere erat nec, mollis tellus. Sed ut volutpat mi.</p>        
            </div>
        </div>
        
    </div>
    <div class="block-reg">
        <button type="button"><img src="../Public/img/Google.svg"> <strong>ZAREJESTRUJ SIĘ PRZEZ GOOGLE</strong></button>
        <button type="button"><img src="../Public/img/Twitter.svg"> <strong>ZAREJESTRUJ SIĘ PRZEZ TWITTER</strong></button>
        <button type="button"><img src="../Public/img/Facebook.svg"> <strong>ZAREJESTRUJ SIĘ PRZEZ FACEBOOK</strong></button>
        Masz już konto? <a href="?page=login"><strong>Zaloguj się</strong></a>           
    </div>
</div>
</body>
<?php include(dirname(__DIR__).'/footer.php'); ?>
</html>