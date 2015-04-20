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
        <title>Новое обращение c cайта http://go.decormehedova.ru/landing/kursi-decora-ukraine </title>
    </head>
 <body>
        <p>Новая заявка с сайта http://go.decormehedova.ru/landing/kursi-decora-ukraine на участие в тренинге 14, 15 мая 2015 года:</p>
        <p>Имя: '.htmlspecialchars($_REQUEST['name']).'</p>
		<p>E-mail: '. htmlspecialchars($_REQUEST['email']).'</p>   
        <p>Телефон: '. $_REQUEST['phone'].'</p>
        <p>Заказанный пакет услуг: GOLD </p>
    </body>
</html>';
mail("goluboilen@gmail.com", "Тренинг Александры Мехедовой : Заявка на участие" ,$message,$headers);
echo "Спасибо, заявка принята";

$str_keys = file_get_contents('count.txt');
    /*если в файле count.txt есть информация о заявках*/
    if($str_keys!="") {

    
file_put_contents('count.txt',$str_keys+1);
}
?>


