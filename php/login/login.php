<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>CS:GO</title>  

<meta charset="utf-8">  
<link rel="stylesheet" type="text/css" href="../../css/logovanje.css">  
</head>
<body>
    <div id="wrapper">

            
        </header>
          
                <div class="okvir">
				 <div class="login">
        
                        <form action="obrada.php" method="post">
                    
                                <label for="username">Korisničko ime</label>
                                <input type="text" name="username">
                    
                                <label for="password">Lozinka</label>
                                <input type="password" name="password">
                            
                                <button type="submit">Prijavi se</button>
								<br/>
								<?php  

                               if(isset($_GET['msg'])){
								   echo $_GET["msg"];}


								?>
								 
                    
                
                        </form>
						<div id="ack"></div>
        
        
        
        
        
                 </div>
        
                </div>
                    <footer>
                        <div id="futer"><p> &copy; Nemanja Nikolaj Boban</p></div></footer>
                        
        
                    
    </div>
    
</body>    
</html>