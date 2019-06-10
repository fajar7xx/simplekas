<?php  
session_start();
// cara menghancurkan session
// agar session tidak tertinggal d server 
// dan org lain tidak dapat mengaksesnya
$_SESSION = [];
session_unset();
session_destroy();
// // menghancurkan cookie
// setcookie('id', '', time() - 3600);
// setcookie('key', '', time() - 3600);
header('Location:login');
exit();
?>