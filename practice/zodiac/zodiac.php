<?php

function yearList($startYear, $endYear){
    
    $sum = 0;
    $zodiac = array("rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "goat", "monkey", "rooster", "dog", "pig");
    $zodiacsign = 0;
    
    echo '<header>Chinese Zodiac Years</header>';
    echo '<ul>';
    
    for ($i = $startYear; $i <= $endYear; $i++) {
        echo '<li> Year' . $i;
        
        
         if ($i == 1776)
        {
            echo "<b>USA INDEPENDENCE</b>";
        }
        
        
        if ($i%100 == 0){
            
            echo '<b><h3>Happy New Century!</h3></b>';
        }
    
        
        echo '</li>';
        echo '<img src="img/" . $zodiac[$m] . ".png"';
        $sum += $i;
    }
    echo '</ul>';
    
    
    
    echo 'Year Sum = '. $sum;
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Chinese Zodiac Practice</title>
    </head>
    <body>

        
    <?php
    
        yearList(1500, 2000);
    
    ?>


    </body>
</html>