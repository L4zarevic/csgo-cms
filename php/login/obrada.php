<?php

session_start();

$bp=mysqli_connect("localhost","root","","csgobaza");

if(!$bp){
    die('Greska pri povezivanju s bazom');
}

//normalizacija podataka
$username = mysqli_real_escape_string($bp,$_POST['username']);
$password = mysqli_real_escape_string($bp,$_POST['password']);

$hash_password=md5($password);

$upit="select * from admin where Username='$username' AND Password='$hash_password'";
$rezultat=mysqli_query($bp,$upit);

if (!$rezultat)
    die(mysqli_error($bp));



// Iz tabele admin podaci 
while ($red=mysqli_fetch_object($rezultat)){
$user=$red->Username;
$pass=$red->Password;
}

//provjere
if (!$username && !$password){
	$greska=1;
    
}
else if (!$username){
	$greska=1;
    
}
else if (!$password){
	$greska=1;
    
}
else{
    if(($username== $user) && ($hash_password==$pass)){
	$greska=0;
 
}else{
	$greska=1;

}
}
if($greska==1){
	$greska='Neuspiješno logovanje';
	header("Location:login.php?msg=$greska");
    exit;
}else{
	$_SESSION['prijavljen']= true;
    die(header('Location: ../admin/index.php'));
	
}
	



?>