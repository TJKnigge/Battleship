<html>
    <html>
<head>
        <meta charset="UTF-8">
    
    <title>
        
         Battleship  
         
    </title>
    
        
        <link rel="stylesheet" type="text/css" href="battleship.css">
        
</head>
    
        <script>
        function Insert(m){
            
            console.log (m);
            
            document.getElementById("idbutton05").value = 1;
            if("idbutton" === 1){
                
            document.getElementById("idbutton"+m).style.background = "red";
            
        }else
            document.getElementById("idbutton"+m).style.background = "blue";
        
        }
        </script>


    
<body>
                
        <h1><font color="darkred">Battleship</h1>
        
     
        
        
                
<?php
        $toetsen = array(array("","","","","","","","","",""),
                    array("","","","","","","","","",""),
                    array("","","","","","","","","",""),
                    array("","","","","","","","","",""),
                    array("","","","","","","","","",""),
                    array("","","","","","","","","",""),
                    array("","","","","","","","","",""),
                    array("","","","","","","","","",""),
                    array("","","","","","","","","",""),
                    array("","","","","","","","","",""));
        
        
            for ($x = 0; $x < 10; $x++) {
            echo "<br>";
            for ($y = 0; $y < 10; $y++) {
                
            $id= $x."".$y;      
                       
                echo '<button id=idbutton'.$id.' onclick="Insert(\''.$id.'\')">'.$toetsen[$x][$y].'</button>';
                
            }
        }
        
        
?>
         
        
        
</body>
    
</html> 
    
    
<?php



?>