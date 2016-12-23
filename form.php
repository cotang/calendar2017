<?php header("Content-Type: text/html; charset=utf-8");?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php

// if(isset($_POST)){ //Проверка поля
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $to = "kbogdanov1@mail.ru"; //Почта получателя, через запятую можно указать сколько угодно адресов
  $from = "From: ".$name."\r\n";; // this is the sender's Email address
  $subject = "Новая заявка на календарь Президент-2017"; //Заголовок сообщения
  $message = "Поступила новая заявка от ".$name." на заказ календаря Президент-2017 \n\n Email клиента: ".$email;
  // $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
  // $headers = "Landing-page President-2017 Calendar \r\n"; //Наименование и почта отправителя
  mail($to, $subject, $message, $from); //Отправка письма с помощью функции mail

  echo "Заявка успешно отправлена. Спасибо, " . $email . "! С вами скоро свяжутся наши специалисты. <br /> Mail Sent. Thank you, " . $email . "! We will contact you shortly.";
// }


  /* отправка смс */
  $number = 79217922768; // в формате 79998886655
  $body=file_get_contents("http://sms.ru/sms/send?api_id=D4128905-1C41-A380-FF45-0CB426246FAD&to=". $number ."&text=".urlencode("Новая заявка на календарь от ".$email." ")); 


?>
