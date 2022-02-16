<<?php 
 //sessiondestroy()
    //session unset
    //header vers index<
// destruction de la session
session_start();
session_destroy();
// libération des variables globales associées à la session
unset($_SESSION['login']);
unset($_SESSION['statut']);
header("Location:index.php");
exit();
 ?>