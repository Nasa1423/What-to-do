﻿<?php
if(isset($_POST['email']) && isset($_POST['pass'])) 
{
    $email = ($_GET['email']);
    $pass = ($_GET['pass']);?>
    <html>
    <head>
    <title>Анкетные данные</title>
    </head>
    <body>
    <p>Ваше мыло:<?php $email = ($_GET['email']); echo $email;?></p>
    <p>Пароль: Не скажу)))</p>
	</body>
	</html>
<?php
}
else
{   
    echo "Введенные данные некорректны";
	exit();
}
?>