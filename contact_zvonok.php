<?php 
//$_REQUEST['theme'] =  iconv("utf-8", "windows-1251",htmlspecialchars($_REQUEST['theme']));
$_REQUEST['phone'] =  iconv("utf-8", "windows-1251",htmlspecialchars($_REQUEST['phone']));
//$_REQUEST['name']=  iconv("utf-8", "windows-1251",htmlspecialchars($_REQUEST['name']));


$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "Content-Transfer-Encoding: 8bit \r\n"; 
$message = '
<html>
    <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Заказ звонка http://go.decormehedova.ru/landing/kursi-decora-ukraine/</title>
    </head>
    <body>
        <p>Заказ звонка http://go.decormehedova.ru/landing/kursi-decora-ukraine/:</p>
        <p>Имя: '.htmlspecialchars($_REQUEST['name']).'</p>
		<p>E-mail: '. htmlspecialchars($_REQUEST['email']).'</p>   
        <p>Телефон: '. $_REQUEST['phone'].'</p>
        
    </body>
</html>';
mail("goluboilen@gmail.com", "Тренинг Александры Мехедовой : Заказ звонка" ,$message,$headers);
echo "Спасибо, вам перезвонят в ближайшее время"; 
?>


