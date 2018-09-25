<?php
if(isset($_POST['email']) && isset($_POST['pass'])) 
{
    $email = htmlentities($_POST['email']);
    $pass = htmlentities($_POST['pass']);
    $output ="
    <html>
    <head>
    <title>Анкетные данные</title>
    </head>
    <body>
    Ваше мыло: $email<br />
    Пароль: Не скажу)))"
	$output.="</body></html>";
    echo $output;
}
else
{   
    echo "Введенные данные некорректны";
}
?>