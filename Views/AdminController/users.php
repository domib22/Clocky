<?php
    if(!isset($_SESSION['id']) and !isset($_SESSION['role'])) {
        die('You are not logged in!');
    }

    if($_SESSION['role'] != 1){
        die('You do not have permission to watch this page!');
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css" href="../Public/css/style.css" />
    <link rel="Stylesheet" type="text/css" href="../Public/css/users.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/4bfcc98eca.js" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="../Public/js/app.js"></script>
    <title>Clocky</title>
</head>
<body>
<?php include(dirname(__DIR__).'navbar.php'); ?>
<!-- <?php include(dirname(__DIR__).'/menu.php'); ?> -->
<div class="container">
<div class="col-6">
    <table class="table mt-4 text-light">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row"><?= $user->getId(); ?></th>
            <td><?= $user->getName(); ?></td>
            <td><?= $user->getSurname(); ?></td>
            <td><?= $user->getEmail(); ?></td>
            </tr>
        </tbody>
        <tbody class="users-list">
        </tbody>
    </table>
    <button class="btn-primary btn-lg ml-0" type="button" onclick="getUsers()">
        Get all users    
    </button>
</div>
</div>
</body>
</html>