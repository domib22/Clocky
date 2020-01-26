<?php
    if(!isset($_SESSION['id']) and !isset($_SESSION['role'])) {
        die('You are not logged in!');
    }

    if(!in_array('ROLE_USER', $_SESSION['role'])) {
        die('You do not have permission to watch this page!');
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/board.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/4bfcc98eca.js" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="../Public/js/app.js"></script>
    <title>Clocky</title>
</head>
<body>
<?php include(dirname(__DIR__).'/BoardController/navbar.php'); ?>
<div class="container">
    <div class="board">
        <!-- foreach -->
        <?php foreach($posts as $post): ?>
        <div class="wraper">
            <img src="<?= '../Public/img/uploads/'.$post->getImage() ?>">
            <div class="actions-bar">
                    <i class="fas fa-heart"></i> <?= $post->getLikes() ?> 
                    <i class="fas fa-heart-broken"></i> <?= $post->getDislikes() ?> 
                    <span class="float-right">SAVE <i class="fas fa-bookmark"></i></span>
            </div>
        </div>
        <?php endforeach ?>
    </div>

    <button type="button" class="btn btn-primary"><i class="fas fa-heart"></i> Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
</div>
</body>
</html>