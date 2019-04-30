<?php
session_start();

if (is_null($_SESSION['prijavljen'])) {
    header('Location: ../login/login.php');
}

    $bp = mysqli_connect("127.0.0.1", "root", "", "csgobaza");
                if(!$bp) die('Javila se greska');
				mysqli_set_charset($bp,"utf8");



?>

<!DOCTYPE html>
<html>
<head>
<title>CS:GO</title>  
<meta charset="utf-8">  
<link rel="stylesheet" type="text/css" href="../../css/dodavanjeizmjena.css">    
</head>
<body>
    <div id="wrapper">
        <header>
            <div id='navbar'>
<ul>
   <li><a href='index.php'><span>Početna</span></a></li>
   <li><a href='novosti.php'><span>Novosti</span></a></li>
  
   <li><a href='../login/odjava.php'><span>Odjava</span></a></li>
      
</ul>
            </div>
            
        </header>
            <div class="baner">
                
        
            </div>
        
        <div class="glavni_meni">
            
            <?php

// Normalizacaija podataka
$ID = (int) @$_GET['ID'];

// Ucitavanje podataka iz baze
$rezultat = mysqli_query($bp, "select * from Vijest where ID=$ID");
if (!$rezultat)
    die(mysqli_error($bp));
            mysqli_set_charset($bp,"utf8");
            

$red = mysqli_fetch_object($rezultat);

?>
            
            
            <div class="izmjeni">
                       <h2>Izmjenite Vijest</h2>
                 <form action="izmjena_db.php" method="post" enctype="multipart/form-data">
		
			          
		                <input type="hidden" name="ID" value="<?php echo $red->ID; ?>"  />
			                
                        <label for="Autor">Autor</label>
                        <input type="text" name="Autor" value="<?php echo $red->Autor; ?>" /><br />
		                  
                        <label for="Naslov">Naslov</label>
                        <input type="text" name="Naslov" value="<?php echo $red->Naslov; ?>" /><br />
		                 
                        <label for="Datum">Datum</label>
                        <input type="text" name="Datum" value=" <?php echo date('j.n.Y. H:i', $red->Datum) ?>" />
                           
                        <label for="Sadrzaj">Sadrzaj</label>
                        <textarea  cols="50" rows="5" name="Sadrzaj"><?php echo $red->Sadrzaj; ?> </textarea> <br />
                     
           
                        <button type="submit" name="btn_upload">Izmjeni vijest</button> 
                        <br />
				         
                        
		                  
                    </form>

                
            </div>    
                </div>
        
                    <footer>
                        <div id="futer"><p> &copy; Nikolaj Boban Nemanja</p></div>
                        
        
                    </footer>
    </div>
                
        
    
</body>    
</html>