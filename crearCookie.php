<?php
/**
 * Created by WebStorm.
 * User: Ronny
 * Date: 27/4/2019
 * Time: 17:40
 */


 setcookie("selCookie", $_GET['idioma'], time()+84320);

 header("Location:verCookie.php");
?>

