<!DOCTYPE html>
<html>
    <head>
        <title>Homework 3 - HTML Forms/PHP </title>
        <link type="css/text" rel="stylesheet" href="css/styles.css">
        <link rel="shortcut icon" href="https://ilearn.csumb.edu/pluginfile.php/273577/mod_resource/content/1/Luigi.jpg" type="image/jpg" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        
        <form action="confirmation.php" method="POST">
            <font size = 4>
                <label>Enter your name: </label><input type="text" name="name"/><br>
                <label>Enter your email: </label><input type="text" name="email"/><br>
                <label>Enter your age: </label><input size="3" type="text" name="age"/><br>
        </form>
        
        <form action="confirmation.php" method="POST">
            <font size= 4>
            <b>Select your favorite Nintendo Game System:</b>
            <select id="favorite">
                <option value= "null">-----Select Below-----</option>
                <option value= "GameBoy">GameBoy</option>
                <option value= "Wii">Wii</option>
                <option value= "Super Nintendo">Super Nintendo</option>
                <option value= "GameCube">GameCube</option>
                <option value= "Wii U">Wii U</option>
                <option value= "Nintendo Switch">Nintendo Switch</option>
            </select>
            </font><br><br>
            
        <form action= "confirmation.php" method="POST">
            <font size= 4>
            <b>Who is your favorite Nintendo Character?</b><br>
            <form action= "confirmation.php" method="GET">
                <input type="checkbox" name="favorite" value= "mario"> Mario <img src="img/mario.png"><br>
                <input type="checkbox" name="favorite" value= "link"> Link <img src="img/link.png"><br>
                <input type="checkbox" name="favorite" value= "Sonic"> Sonic <img src="img/sonic.png"><br>
                <input type="checkbox" name="favorite" value= "inkling">Inkling <img src="img/inkling.png"><br>
            </form>
            </font>
        </form>
        
        <form action= "confirmation.php" method="POST">
            <font size = 4>
            <b>Which is your favorite game?</b><br>
            <input type="radio" id="1" name="game" value="1">
            <label for= "1">Mario Kart <img src="img/kart.png"></label>
            <input type="radio" id="2" name="game" value="2">
            <label for= "2">Splatoon <img src="img/splatoon.png"></label>
            <input type="radio" id="3" name="game" value="3">
            <label for= "3">The Legend of Zelda <img src="img/zelda.png"></label>
            <input type="radio" id="4" name="game" value="4">
            <label for= "4">Super Smash Bros. <img src="img/smash.png"></label>
            </font>
        </form>
        
        <br><br>
        
        <input type="submit" value="Submit Information" onclick="displayData()"/>

    </body>
</html>