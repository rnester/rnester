<!DOCTYPE html>
<html>
    <head>
        <title>Homework 3 - HTML Forms & PHP </title>
        <link type="css/text" rel="stylesheet" href="css/styles.css">
        <link rel="shortcut icon" href="https://ilearn.csumb.edu/pluginfile.php/273577/mod_resource/content/1/Luigi.jpg" type="image/jpg" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        
<?php

    function displayData(){
        
        if($_POST["name"]!= null)
        {
            echo "Thank you <b>" . $_POST["name"] . "</b> for your input.<br>";
            echo "Confirmation email has sent to: <b>" . $_POST["email"] . "</b><br><br>";
            
            //Posts their favorite game system
            if ($_POST["favorite"] == "GameBoy")
            {
                echo "Thank you for supporting your favorite game system, <b>GameBoy</b><br>";
                echo "Here is a link to learn more about the GameBoy<br><br>";
            }
            else if($_POST["favorite"] == "Wii")
            {
                echo "Thank you for supporting your favorite game system, <b>Wii</b><br><br>";
                echo "Here is a link to learn more about the Wii<br><br>";
            }
            else if($_POST["favorite"] == "Super Nintendo")
            {
                echo "Thank you for supporting your favorite game system, <b>Super Nintendo</b><br><br>";
                echo "Here is a link to learn more about the Super Nintendo<br><br>";
            }
            else if($_POST["favorite"] == "GameCube")
            {
                echo "Thank you for supporting your favorite game system, <b>GameCube</b><br><br>";
                echo "Here is a link to learn more about the GameCube<br><br>";
            }
            else if($_POST["favorite"] == "Wii U")
            {
                echo "Thank you for supporting your favorite game system, <b>Wii U</b><br><br>";
                echo "Here is a link to learn more about the Wii U<br><br>";
            }
            else if($_POST["favorite"] == "Nintendo Switch")
            {
                echo "Thank you for supporting your favorite game system, <b>Nintendo Switch</b><br><br>";
                echo "Here is a link to learn more about the Nintendo Switch<br><br>";
                
            }
            
            //Posts their 
            
        }
        else {
            echo "Sorry, you didn't enter your name.";
        }
        
    }

    displayData();
?>

    </body>
</html>