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
        function kleur (){
            
            console.log ("idbutton");
            
            document.getElementById("idbutton").style.backgroundColor = "red";
        }
        </script>

<!-----
    <script>
            function Insert(elem)
            {
               console.log (m);
            
             elem.style.backgroundColor = "red";
            
            if(m == m){
                 
                document.getElementById("idbutton").style.background = "red";
            
            console.log ("idbutton");
            }
            
            }
            
    
    
    
    </script>

----->
    
<body>
                
        <h1><font color="darkred">Battleship</h1>
        
     
        
        <div>
                
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
                       
                
                //echo '<button id=idbutton'.$id.' onclick="Insert(\''.$id.'\')">'.$toetsen[$x][$y].'</button>';//
                echo '<button id=idbutton '.$id.' onclick="kleur()" "type="button" class="button"> "$toetsen[$x][$y]"</button>';
            }
        }
        
        
?>
         
</body>
    
</html> 
    
    
<?php









?>
        
    
    
    
    
    
