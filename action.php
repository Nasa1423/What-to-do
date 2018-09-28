<?php
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
<<<<<<< HEAD
	</html>
<?php
=======
	</html>";
	end()
>>>>>>> 82bca652242867dd91364c5ee705f38efe87c332
}
else
{   
    echo "Введенные данные некорректны";
<<<<<<< HEAD
	exit();
=======
	end()
>>>>>>> 82bca652242867dd91364c5ee705f38efe87c332
}
?>