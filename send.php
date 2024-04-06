<?php

if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['phone']) && !empty($_POST['phone'])) {

  echo '<script>localStorage.clear();</script>';

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


  $title = "Заказ c сайта";
  $body = "
  <h2> <b>Имя: </b> $name </h2>
  <h2> <b>Тел.: </b> $phone </h2>
  <h3>  <b>Комментарий: </b> $comment</h3>
  <hr>
    <span>Клубника: </span> $g1
  <hr>
    <span>Бананы: </span> $g2
  <hr>
    <span>Финики: </span> $g3
  <hr>
  ";

  echo $body;
  exit();
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