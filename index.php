<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>CS:GO</title>  
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

  
<link rel=stylesheet type="text/css" href="css/pocetna.css">    
    

</head>
<body>
    <div id="wrapper">
        <header>
            <div id='navbar'>
<ul>
   <li><a href='index.php'><span>Početna</span></a></li>
   <li><a href='novosti.php'><span>Novosti</span></a></li>
   
   <li><a href='kontakt.php'><span>Kontakt</span></a></li>
     
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
                
                $upit = "select * from Vijest order by Datum desc limit 0,3";
                $rezultat = mysqli_query($bp, $upit);
                if(!$rezultat) die(mysqli_error($bp));
                    
              
                    
               
                    while($red = mysqli_fetch_object($rezultat)){
                    
                       
                    echo "<div class='Naslov'>{$red->Naslov}</div>";
                    echo " <div class='Slika'><center><img src='{$red->Slika}' width=50%; ></center></div>\n";
                    echo "<div class='Sadrzaj'>{$red->Sadrzaj}</div>\n";
                    echo " <div class='JumpLink'> <a href='clanak.php?ID={$red->ID}'>Nastavi da čitas ...</a></div>\n";
				    echo "<div class='Autor'>Napisao: {$red->Autor}&nbsp ".date('j.n.Y. H:i', $red->Datum)." </div>\n";        
                }
            ?>
                   
                    
            
        
        
        
                </div>
        
                <div class="desni_meni">
                    
                    <div id="rss">

                  <?php

$xml=simplexml_load_file("rss.xml") or die("Greska xml!!!");



foreach($xml->channel->item AS $vijest)
{
	
    $naslov=$vijest->title;
    $sadrzaj=$vijest->description;
    $vrijeme = strtotime($vijest->pubDate);
    $vrijeme = date('d.m.Y G:i', $vrijeme);
    echo "<div class='rss_vijest'>";
    echo "<div><h3 class='rss_naslov'>$naslov</h3></div>";
    echo "<div>$sadrzaj</div>";
    echo "<div>$vrijeme</div>";
    echo "</div>";
    
}




?>
                  
                   
                   </div>
                    
               </div>
                    <footer>
                        <div id="futer"><p> &copy; Nikolaj Boban Nemanja</p></div>
                        
        
                    </footer>
    </div>
    
</body>    
</html>