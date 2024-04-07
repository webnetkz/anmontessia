<?php

require_once "env.php";

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
    $product1 = "Клубника: " . clearVar($_POST['g1']);
  } else { $product1 = ''; }
  if(isset($_POST['g2']) && !empty($_POST['g2'])) {
    $product2 = "Бананы: " . clearVar($_POST['g2']);
  } else { $product2 = ''; }
  if(isset($_POST['g3']) && !empty($_POST['g3'])) {
    $product3 = "Финики: " . clearVar($_POST['g3']);
  } else { $product3 = ''; }
  if(isset($_POST['g4']) && !empty($_POST['g4'])) {
    $product4 = "Set:" . clearVar($_POST['g4']);
  } else { $product4 = ''; }

  $body = "
	**$name**\n
	**$phone**\n
	-----\n
	$comment\n
	-----\n
	$product1\n
 	$product2\n
 	$product3\n
  $product4\n
  ";
  
  $bot_token = TELEGRAM_TOKEN;
  $id_chat = OWNER_TELEGRAM_ID;
    
  $message .= $body;

  $url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$id_chat&parse_mode=Markdown&text=" . urlencode($message);

  $result = file_get_contents($url);
  echo '<script>location.href = "./";</script>';
} else {
  echo '<script>location.href = "./";</script>';  
}
echo '<script>location.href = "./";</script>'; 


function clearVar($str) {
  if(isset($str) && !empty($str)) {
    $str = htmlentities($str);
    $str = trim($str);
    return $str;
  } else {
    echo '<script>location.href = "./index";</script>';
  }
}