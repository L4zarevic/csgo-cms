<?php

$bp = mysqli_connect("127.0.0.1", "root", "", "csgobaza");
if(!$bp) die('Javila se greska');
mysqli_set_charset($bp,"utf8");


$target_dir = "../../upload/";
$target_file = $target_dir .rand(). basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
		
    }
}
// Check if file already exists
if (file_exists($target_file)) {

    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5242880) {
	
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
    $uploadOk = 0;
	
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $poruka='Vijest nije dodata,pokušajte ponovo!';
	header("Location:  dodavanje_vijesti.php?poruka=$poruka");
	exit();
	
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
 
		$poruka='Vijest nije dodata,pokušajte ponovo!';
		header("Location:  dodavanje_vijesti.php?poruka=$poruka");
		exit();
    }
}
$Autor = mysqli_real_escape_string($bp,$_REQUEST['Autor']);
$Naslov = mysqli_real_escape_string($bp,$_REQUEST['Naslov']);
$Sadrzaj = mysqli_real_escape_string($bp,$_REQUEST['Sadrzaj']);
$Datum = time();
//mysql_real_escape_string($moveResult);
$upit = "insert into Vijest (Autor, Naslov, Sadrzaj, Datum, Slika) values ('$Autor',
'$Naslov', '$Sadrzaj', '$Datum', '$target_file');";
 $rezultat = mysqli_query($bp, $upit);
if (mysqli_error($bp)){ die(mysqli_error($bp));
$poruka='Vijest nije dodata,pokušajte ponovo!';
header("Location:  dodavanje_vijesti.php?poruka=$poruka");
exit();
}else{
	$poruka='Vijest je uspiješno dodata';
	header("Location:  dodavanje_vijesti.php?poruka=$poruka");
}



?>

