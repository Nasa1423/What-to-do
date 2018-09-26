<?php
if(isset($_POST['email']) && isset($_POST['pass'])) 
{
    $email = htmlentities($_POST['email']);
    $pass = htmlentities($_POST['pass']);
	require_once("register.html")
    echo "
    <html>
    <head>
    <title>Анкетные данные</title>
    </head>
    <body>
    <p>Ваше мыло:<span>$email</span></p>
    <p>Пароль: Не скажу)))</p>
	</body>
	</html>";
}
else
{   
    echo "Введенные данные некорректны";
}
?>