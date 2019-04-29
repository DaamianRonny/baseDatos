<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento Principal</title>
</head>
<body>

<?php
if(isset($_COOKIE['selCookie'])){
if ($_COOKIE['selCookie']=='es'){
    header("Location:pagEs.php");
}elseif ($_COOKIE['selCookie']=='in'){
    header("Location:pagIng.php");
}
}


?>
<table align="center">
    <tr >
        <td colspan="2" align="center"><h1>Elija una opcion</h1></td>
    </tr>
    <tr>
        <td align="center"><a href="crearCookie.php?idioma=es"><img width="150" height="120" src="latino.png" alt="Ecuador-Latino"></a></td>
        <td align="center"><a href="crearCookie.php?idioma=in"><img width="150" height="120" src="americano.png" alt="Usa-americano"></a></td>
    </tr>
</table>
</body>
</html>