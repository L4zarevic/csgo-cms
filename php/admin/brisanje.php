<?php

session_start();
if (is_null($_SESSION['prijavljen'])) {
    die(header("Location: ../logovanje/logovanje.php"));
}

$bp = mysqli_connect("127.0.0.1", "root", "", "csgobaza");
if(!$bp) die('Javila se greska');
mysqli_set_charset($bp,"utf8");

    $ID = (int) @$_REQUEST['ID'];

    $upit = "delete from Vijest where ID=$ID";
    $rezultat = mysqli_query($bp, $upit);
    if(!$rezultat){
        die(mysqli_error($bp));
    }

    die(header("Location: index.php"));

?>
