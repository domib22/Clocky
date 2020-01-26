<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4bfcc98eca.js" crossorigin="anonymous"></script>
    <title>Clocky</title>
</head>
<body>
<div class="container">
<div class="block">
    <form action="?page=register" method="POST">
        <div class="messages">
            <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
            ?>
        </div>
                
        <input name="name" type="text" placeholder="Imię">
        <input name="surname" type="text" placeholder="Nazwisko">
        <input name="email" type="text" placeholder="Email">
        <input name="password" type="password" placeholder="Hasło">
        <input name="repeatpassword" type="password" placeholder="Powtórz hasło">
        <br/><br/>Zaznacz jeśli akceptujesz <a href="?page=regulations">REGULAMIN</a> (wymagane)<input type="checkbox" name="regulamin">
        <br/><button type="submit"><strong>ZAREJESTRUJ SIĘ</strong></button>
    </form>
</div>
</div>
</body>
</html>