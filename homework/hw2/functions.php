<?php

function displayCharacter(){
    
        $sort = rand(0,3);
        
        switch($sort){
            
        case 0: $character= "mario";
            break;
        case 1: $character="luigi";
            break;
        case 2: $character="yoshi";
            break;
        case 3: $character="toad";
            break;
        }
        
        echo "<img src='img/character/$character.png' alt='$character' title='". ucfirst($character) ."' width='200'>";
        echo "<h2>You got $character!</h2>";
        
        
         $specialPower = array("flame thrower", "hammer", "red shell", "blue shell", "mushroom");
         $randomPower=array_rand($specialPower,3);
    
        
        if ($character == "mario") {
            echo "<h2>Mario used " . $specialPower[$randomPower[0]] . "</h2>";
        }
             
        else if ($character == "luigi") {
            echo "<h2>Luigi used " . $specialPower[$randomPower[1]] . "</h2>";
        }
        
        else if ($character == "yoshi") {
            echo "<h2>Yoshi used " . $specialPower[$randomPower[2]] . "</h2>";
        }
        
        else if ($character == "toad") {
            echo "<h2>Toad used " . $specialPower[$randomPower[3]] . "</h2>";}
        
    
}

function displayEnemies(){
    
        $sort = rand(0,3);
       
       switch($sort){
            
        case 0: $enemies= "bowserjr";
            break;
        case 1: $enemies="bowser";
            break;
        case 2: $enemies="wario";
            break;
        case 3: $enemies="waluigi";
            break;
        }
        
        
        echo "<img src='img/enemies/$enemies.png' alt='$enemies' title='". ucfirst($enemies) ."' width='200'>";
        echo "<h2>You're going up against $enemies</h2>";
        
        if ($enemies == "bowserjr") { 
            
            
            
            echo "<h1>You lost against Bowser JR!</h1>";
            
        }
        else {
            echo "<h1>YOU WIN!!</h1>";
        }
        
      
    }

    

    
?>
