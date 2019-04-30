<?php
session_start();

if (is_null($_SESSION['prijavljen'])) {
    header('Location: ../login/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>CS:GO</title>  
<meta charset="utf-8">
  
<link rel=stylesheet type="text/css" href="../../css/dodavanjeizmjena.css">    
    

</head>
<body>
    <div id="wrapper">
        <header>
            <div id='navbar'>
<ul>
   <li><a href='index.php'><span>Početna</span></a></li>
   <li><a href='novosti.php'><span>Novosti</span></a></li>

   <li><a href='../login/odjava.php'><span>Odjava</span></a></li>
    
    
     
</ul>    </div>
            
        </header>
            <div class="baner">   </div>
                
        
         
                <div class="glavni_meni">
                    
                       <div class="dodaj">
                       <h2>Dodaj Vijest</h2>
                   <form action="dodavanje_db.php" method="post" enctype="multipart/form-data">
			                
                        <label for="Autor">Autor</label>
                        <input type="text" name="Autor"/>
		                  
                        <label for="Naslov">Naslov</label>
                        <input type="text" name="Naslov"/>
		                 
                        <label for="Sadrzaj">Sadrzaj</label>
                        <textarea  cols="50" rows="5" name="Sadrzaj"></textarea> 
                     
                        <label for="fileToUpload">Slika</label>
                        <input type="file" name="fileToUpload" id="fileToUpload" size="60">
           
                        <button type="submit" name="btn_upload">Dodaj vijest</button> 
						
						<br/>
								<?php  

                               if(isset($_GET['poruka'])){
								   echo '<script type="text/javascript">alert("' . $_GET["poruka"] . '")</script>';
								   }


								?>
                        
		                  
                    </form>

                
            </div>  
                    

                </div>
        
                <div class="desni_meni">
              <p>popunicemo ovaj dio...test</p>
               </div>
                    <footer>
                        <div id="futer"><p> &copy; Nikolaj Boban Nemanja</p></div>
                        
        
                    </footer>
    </div>
    
</body>    
</html>