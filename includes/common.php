<?php
$con=mysqli_connect("localhost","root","","collegehack");
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
/*if (!isset($_SESSION['id']))
session_start();
else
{
    session_destroy();
    session_start();
}*/
?>
