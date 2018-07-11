<?php
 require_once 'smtp.php';
 $mailSMTP = new SendMailSmtpClass('pirogidanel@yandex.kz', 'D6w1F7r8', 'ssl://smtp.yandex.ru', 'damira.kz', 465);
      $headers= "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n";
      $headers .= "From: damira <pirogidanel@yandex.kz>\r\n";
      $name = $_POST['name'];
      $good = $_POST['good'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $message = '
<html>
<head>
  <title>Обратная связь Сайт</title>
</head>
<body>
  <table>
    <tr>
      <th></th><th></th>
    </tr>
    <tr>
      <td>Клиент: </td><td> "'.$name.'" </td>
    </tr>
    <tr>
      <td>Товар: </td><td> "'.$good.'" </td>
    </tr>
    <tr>
      <td>Номер телефона: </td><td> "'.$phone.'" </td>
    </tr>
  </table>
</body>
</html>
';
      $result =  $mailSMTP->send($email,'Обратная связь Сайт', $message, $headers);
      if($result === true){
          echo "ok";
      }else{
          return false;
      }
 ?>
