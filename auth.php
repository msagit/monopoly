<?php
//  header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
if (isset($_REQUEST[session_name()])) session_start();
if (isset($_COOKIE[session_name()])) session_start();

if (isset($_SESSION['user_identity']) AND $_SESSION['ip'] == $_SERVER['REMOTE_ADDR']) {
	$_GET['user_identity'] = $_SESSION['user_identity'];
	//echo 'Auth user_identity='.$_SESSION['user_identity'];
}
else {
  session_destroy();
  header("Location: http://".$_SERVER['HTTP_HOST'].'/gw');
  die;
}
?>