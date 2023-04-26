<?php
$to = "<tdmaslov@mail.ru>";
$subject = 'RichBitch - Новая анкета';
$phone = $_POST['f-phone'];
$name = $_POST["f-name"];
$text = $_POST["f-comment"];
$message = '
<html>
<body>
<center>	
<table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
 <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
 <tr>
  <td><b>Номер телефона</b></td>
  <td><a href="tel:'.$phone.'">'.$phone.'</a></td>
 </tr>
 <tr>
  <td><b>Имя</b></td>
  <td>'.$name.'</td>
 </tr>
 <tr>
  <td><b>О себе</b></td>
  <td>'.$text.'</td>
 </tr>
</table>
</center>	
</body>
</html>'; 
$headers  = 
'from: info@richbitch.ru' . PHP_EOL .
"Content-type: text/html; charset=utf-8\r\n";
$result = mail($to, $subject, $message, $headers);

?>

<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Rich Bitch</title>
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body class="success-body">
        <div class="full-page d-flex justify-content-center align-items-center">
            <div class="success-block">
                <h1>Анкета отправлена успешно!</h1>
                <p>В ближайшее время с вами <span>свяжется менеджер</span>.</p>
                <img src="img/logo.webp">
                <a class="button" href="https://richbitch.studio"><- Вернуться назад</a>
            </div>
            
        </div>
    
</body>
