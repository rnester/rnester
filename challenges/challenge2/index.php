
<?php 
  
         function displaySymbol($randomValue, $pos){
        switch($randomValue){
            case 5: $card = "ace";
            break;
            case 2: $card = "jack";
            break;
            case 4: $card = "king";
            break;
            case 3: $card = "queen";
            break;
            case 1: $card = "ten";
            break;
        }
        echo "<img id='reel$pos' src='cards/$card.png' alt='$card' width='70px;' title='" . ucfirst($card) . "' height='100px;'/>";
         }
         

       
       
       function displayPoints($randomValue1, $randomValue2){
            
          
            echo "<div id='output'>";
            if ($randomValue1 > $randomValue2 ) {

                echo "<h2>Computer Wins</h2>";
            }
            else if ($randomValue1 < $randomValue2 ){
                echo "<h2> Human Wins!</h3>";
            }
            else {
                 echo "<h2> It's a tie</h3>";
            }
            echo "</div>";
       }
            
               function play(){
     
      for ($i = 1; $i < 3; $i++){ //Without this for loop, images would not display.
            ${"randomValue" . $i} = rand (1, 5);
            displaySymbol(${"randomValue" . $i}, $i);
        }
        
        displayPoints($randomValue1, $randomValue2); //must call function right after for loop.
 };

?>