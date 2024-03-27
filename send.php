<?php

if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['phone']) && !empty($_POST['phone'])) {

  echo '<script>localStorage.clear();</script>';

  require_once './app/libs/mailSender.php';

  $name = htmlentities($_POST['name']);
  $name = trim($name);

  $phone = htmlentities($_POST['phone']);
  $phone = trim($phone);

  if(isset($_POST['comment']) && !empty($_POST['comment'])) {
    $comment = clearVar($_POST['comment']);
  } else { $comment = 'нет'; }
  if(isset($_POST['g1']) && !empty($_POST['g1'])) {
    $g1 = clearVar($_POST['g1']);
  } else { $g1 = 'нет'; }
  if(isset($_POST['g2']) && !empty($_POST['g2'])) {
    $g2 = clearVar($_POST['g2']);
  } else { $g2 = 'нет'; }
  if(isset($_POST['g3']) && !empty($_POST['g3'])) {
    $g3 = clearVar($_POST['g3']);
  } else { $g3 = 'нет'; }
  if(isset($_POST['g4']) && !empty($_POST['g4'])) {
    $g4 = clearVar($_POST['g4']);
  } else { $g4 = 'нет'; }

  ##################################
  ##################################
  ##################################

  // Файлы phpmailer
  require './app/libs/PHPMailer/PHPMailer.php';
  require './app/libs/PHPMailer/SMTP.php';
  require './app/libs/PHPMailer/Exception.php';

  // Формирование самого письма
  $title = "Заявка TENYES";
  $body = "
  <h2> <b>Имя: </b> $name </h2>
  <h2> <b>Тел.: </b> $phone </h2>
  <h3>  <b>Комментарий: </b> $comment</h3>
  <hr>
    <span>Товар 1: </span> $g1
  <hr>
    <span>Товар 2: </span> $g2
  <hr>
    <span>Товар 3: </span> $g3
  <hr>
    <span>Товар 4: </span> $g4
  <hr>
  <hr>
  ";

  // Настройки PHPMailer
  $mail = new PHPMailer\PHPMailer\PHPMailer();
  try {
      $mail->isSMTP();
      $mail->CharSet = "UTF-8";
      $mail->SMTPAuth   = true;
      //$mail->SMTPDebug = 2;
      $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

      // Настройки вашей почты
      $mail->Host       = 'ssl://smtp.mail.ru'; // SMTP сервера вашей почты
      $mail->Username   = 'info@tenyes.kz'; // Логин на почте
      $mail->Password   = 'fepipe76'; // Пароль на почте
      $mail->SMTPSecure = 'ssl';
      $mail->Port       = 465;
      $mail->setFrom('info@tenyes.kz', 'TenYes'); // Адрес самой почты и имя отправителя

      // Получатель письма
      $mail->addAddress('dbqqbq@gmail.com');

      // Прикрипление файлов к письму
      if (!empty($file['name'][0])) {
          for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
              $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
              $filename = $file['name'][$ct];
              if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
                  $mail->addAttachment($uploadfile, $filename);
                  $rfile[] = "Файл $filename прикреплён";
              } else {
                  $rfile[] = "Не удалось прикрепить файл $filename";
              }
          }
      }
      // Отправка сообщения
      $mail->isHTML(true);
      $mail->Subject = $title;
      $mail->Body = $body;

      // Проверяем отравленность сообщения
      if ($mail->send()) {$result = "success";}
      else {$result = "error";}

      } catch (Exception $e) {
          $result = "error";
          $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
      }

    ##################################
    ##################################
    ##################################


  echo '<script>location.href = "./index";</script>';
} else {
  echo '<script>location.href = "./index";</script>';  
}
echo '<script>location.href = "./index";</script>'; 


function clearVar($str) {
  if(isset($str) && !empty($str)) {
    $str = htmlentities($str);
    $str = trim($str);
    return $str;
  } else {
    echo '<script>location.href = "./index";</script>';
  }
}