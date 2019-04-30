<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>CS:GO</title>  
<meta charset="utf-8">
  
<link rel=stylesheet type="text/css" href="../../css/clanak.css">    
    

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
                $bp = mysqli_connect("127.0.0.1", "root", "", "csgobaza");
                if(!$bp) die('Javila se greska');
				mysqli_set_charset($bp,"utf8");
				
				
				if(isset($_GET['ID'])){
					$id=$_GET["ID"];
				}
                
                $upit = "select * from Vijest where ID=$id;";
                $rezultat = mysqli_query($bp, $upit);
                if(!$rezultat) die(mysqli_error($bp));
                    
              
                    
               
                    while($red = mysqli_fetch_object($rezultat)){
                    
                       
                    echo "<div class='Naslov'>{$red->Naslov}</div>";
                    echo " <div class='Slika'><center><img src='{$red->Slika}' width=50%; ></center></div>\n";
                    echo "<div class='Sadrzaj'>{$red->Sadrzaj}</div>\n";
				    echo "<div class='Autor'>Napisao: {$red->Autor}&nbsp ".date('j.n.Y. H:i', $red->Datum)." </div>\n";        
                }
            ?>
                   
                    
            
        
        
        
                </div>
        
                
                    <footer>
                        <div id="futer"><p> &copy; Nikolaj Boban Nemanja</p></div>
                        
        
                    </footer>
    </div>
    
</body>    
</html>