<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>CS:GO</title>  
<meta charset="utf-8">  
<link rel="stylesheet" type="text/css" href="../../css/logovanje.css">    
<link rel="stylesheet" type="text/css" href="../../css/kontakt.css">  
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
		
		<div id="form">
          
          <form method="post" action="email.php">
              
              <p>
              <label for="name">Ime:</label>
              <input type="text" name="name"  required>
              
              </p>
              
              <p>
              <label for="name">Email:</label>
              <input type="text" name="email" required>
              
              </p>
              
    
              
                  
            <p> 
            <label for="message">Poruka</label>
            <textarea id="message" name="message" id="" cols="30" rows="10" required></textarea>
              </p> 
              
              <p>
                  <input id="submit" type="submit" name="submit" value="Pošaljite poruku">
              </p>
              
              
              
              
          </form>
          
               
                
                       
        
        
        
        
        
        
        
                </div>
                    <footer>
                        <div id="futer"><p> &copy; Nemanja Nikolaj Boban</p></div></footer>
                        
        
                    
    </div>
    
</body>    
</html>