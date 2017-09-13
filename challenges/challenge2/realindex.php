<!DOCTYPE html>
<html>
    <head>
        <title>Challenge 2 </title>
         <link  href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1> Random Card Game</h1>

<div id="main">
<!--    <img id='reel1' src='img/lemon.png' alt='lemon' title='Lemon' width='70' >-->
<!--<img id='reel2' src='img/cherry.png' alt='cherry' title='Cherry' width='70' >-->
<!--<img id='reel3' src='img/lemon.png' alt='lemon' title='Lemon' width='70' >-->
    
    <div id= "Computer">Human</div>
    <div id= "human">Computer</div>
    
    <div>
         <?php 
       include 'inc/functions.php';
        play();
        ?>
        </div>
<form> 
<input type="submit" value="Play!"/>
</form>
</div>
    </body>
</html>