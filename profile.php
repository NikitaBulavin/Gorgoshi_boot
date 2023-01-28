<?php
session_start();
if (!$_SESSION[ 'user' ]){
    header( 'Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">


      <!-- Форма авторизации -->


</head>
<body>
<!-- Профиль  -->
<!-- Поменять на контейнер и добавить стили  -->
<div>
    <form>
     <img src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="">
     <h2><?= $_SESSION['user']['full_name'] ?></h2>
     <a href="#"> <?= $_SESSION['user']['email'] ?> </a>
     <a href="vendor/logout.php" class="logout">Вихід</a>
    </form>
</div>


</body>
</html>
