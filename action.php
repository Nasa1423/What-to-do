<?php
if(isset($_POST['email']) && isset($_POST['pass'])) 
{
    $email = htmlentities($_POST['email']);
    $pass = htmlentities($_POST['pass']);
    echo "
    <html>
    <head>
    <title>Анкетные данные</title>
    </head>
    <body>
    <p>Ваше мыло:$email</p>
    <p>Пароль: Не скажу)))</p>
	</body>
	</html>"
}
else
{   
    echo "Введенные данные некорректны";
}
?>