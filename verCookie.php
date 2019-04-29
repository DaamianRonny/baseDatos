<?php
/**
 * Created by WebStorm.
 * User: Ronny
 * Date: 27/4/2019
 * Time: 17:42
 */


   if(!$_COOKIE['selCookie']){
       header("Location:index.php");
   }elseif ($_COOKIE['selCookie']=='es'){
       header("Location:pagEs.php");
   }elseif ($_COOKIE['selCookie']=='in'){
       header("Location:pagIng.php");
   }
?>