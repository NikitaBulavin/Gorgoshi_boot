<?php
session_start();
if ($_SESSION[ 'user' ]){
    header( 'Location: profile.php');
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
    <form action="/vendor/signup.php" method="post" enctype="multipart/form-data">
         <label> ФІО </label>
         <input type="text" name= "full_name" placeholder="Введіть свое повне ім`я ">
         <label> Логин </label>
         <input type="text" name= "login" placeholder="Введіть свій логін ">
         <label> Пошта </label>
         <input type="email" name= "email" placeholder="Введіть адресу своєї пошти ">
         <label> Зображення профілю </label>
         <input type="file" name= "avatar"placeholder="Введіть свій пароль">
         <label> Пароль </label>
         <input type="password" name= "password"placeholder="Введіть свій пароль">
         <label> Підтвердження пароля </label>
         <input type="password" name= "password_confirm" placeholder="Підтвердіть свій пароль">
         <button type="submit">Войти</button>
         <p>
            Вже маєте аккаунт? - <a href="/"> Авторизуйся </a>
         </p>
            <?php
            if ($_SESSION['massage']){
                 echo  '<p class="massage"> ' . $_SESSION['massage'] . ' </p>';
            }
            
            unset ($_SESSION['massage']) ;
            ?>    
       
    </form>
    
</body>
</html>