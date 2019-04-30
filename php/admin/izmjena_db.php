<?php

  $bp = mysqli_connect("127.0.0.1", "root", "", "csgobaza");
                if(!$bp) die('Javila se greska');
				mysqli_set_charset($bp,"utf8");

    $ID = (int) @$_REQUEST['ID'];

	$Autor = mysqli_real_escape_string($bp, @$_POST['Autor']);
    $Naslov = mysqli_real_escape_string($bp, @$_POST['Naslov']);
 $Datum = mysqli_real_escape_string($bp, strtotime(@$_POST['Datum']));

    $Sadrzaj = mysqli_real_escape_string($bp, @$_POST['Sadrzaj']);
        
$upit = "update Vijest set Autor='$Autor', Naslov='$Naslov',Datum='$Datum', Sadrzaj='$Sadrzaj' where ID=$ID;";
$rezultat = mysqli_query($bp, $upit);
if (!$rezultat)
    die(mysqli_error($bp));


die(header("Location: index.php"));

?>