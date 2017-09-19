<!DOCTYPE html>
<html>
    <head>
        <title>Homework 2</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="http://2.bp.blogspot.com/-oP7HrKAuibk/US-3SOUUcCI/AAAAAAAAE8A/T6TvIQCYHmE/s1600/mario_pixelart2.png" type="image/png">
    </head>
    
<body>
<title1>
    <h1><center>Homework 2</center></h1>
</title1>


<?php
    class Card
            {
                private $number;
                private $suit;
                
                function __construct($n, $s)
                {
                    $this->number = $n;
                    $this->suit = $s;
                }
                
                function getImage()
                {
                    return "img/" . $this->suit . "/" . $this->number . ".png";
                }
                function getCardValue()
                {
                    return $this->number;
                }
                function getCardName()
                {
                    return $this->number . " of " . $this->suit;
                }
            }
            function shuffleDeck(&$deck)
            {
                $temp;
                for($i = count($deck) - 1; $i > 0; --$i)
                {
                    $j = rand() % ($i + 1);
                    $temp = $deck[$j];
                    $deck[$j] = $deck[$i];
                    $deck[$i] = $temp;
                }
            }
            class Player
            {
                private $name = "";
                private $picture = "";
                private $numCards = 0;
                private $hand = array();
                private $score = 0;
                
                function __construct($n, $c)
                {
                    $this->name = $n;
                    $this->numCards = $c;
                }
                
                function addCard($c)
                {
                    $this->hand[] = $c;
                }
                function getNumCards()
                {
                    return $this->numCards;
                }
                function finalize()
                {
                    for($i = 0, $j = count($this->hand); $i < $j; ++$i)
                    {
                        $this->score += $this->hand[$i]->getCardValue();
                    }
                    return $this->score;
                }
                function getScore()
                {
                    return $this->score;
                }
                function getName()
                {
                    return $this->name;
                }
                 function getPlayerPic()
                {
                    return "img/players/" . $this->picture;
                }
                function getHand()
                {
                    return $this->hand;
                }
            }
            
            $deckOfCards = array();
            for($i = 1; $i <= 13; ++$i)
            {
                $deckOfCards[] = new Card($i, "clubs");
            }
            for($i = 13; $i >= 1; --$i)
            {
                $deckOfCards[] = new Card($i, "diamonds");
            }
            for($i = 1; $i <= 13; ++$i)
            {
                $deckOfCards[] = new Card($i, "spades");
            }
            for($i = 13; $i >= 1; --$i)
            {
                $deckOfCards[] = new Card($i, "hearts");
            }
            shuffleDeck($deckOfCards);
            $topDeck = count($deckOfCards) - 1;
            
            $players = array();
            
            $playerNames = ["Britney", "Brit", "Britney B*tch", "B"];
            
            $playerPics = ["<img src=img/players/1.jpg style=width:72px;height:96px>", "<img src=img/players/2.jpg style=width:72px;height:96px>", 
                            "<img src=img/players/3.jpg style=width:72px;height:96px>", "<img src=img/players/4.jpg style=width:72px;height:96px>"];
            
            $topScore = 0;
            
            for($i = 0; $i < 4; ++$i)
            {
                
                $players[] = new Player($playerNames[$i], rand() % 3 + 4);
                
                for($j = 0; $j < $players[$i]->getNumCards(); ++$j)
                {
                    $players[$i]->addCard($deckOfCards[$topDeck--]);
                }
                $temp = $players[$i]->finalize();
                if($temp > $topScore && $temp <= 42)
                {
                    $topScore = $temp;
                }
            }
            
            echo "<center>";
            echo "<table>";
            
            for($i = 0, $j = count($players); $i < $j; ++$i)
            {
                echo "<tr><td>";
                echo "<b><nameLabel>" . $players[$i]->getName() . "&nbsp&nbsp</b>";
                echo $playerPics[$i] . "&nbsp&nbsp";
                echo "</td>";
                echo "<td>";
                
                for($k = 0, $l = $players[$i]->getNumCards(); $k < $l; ++$k)
                {
                    echo "<img src=\"" . $players[$i]->getHand()[$k]->getImage() . "\" />";
                }
                echo "</td>";
                echo "<td>";
                
                echo "<center>&nbsp<b>\n\t\t" . $players[$i]->getScore() . "<center></b>";
                echo "</td>";
                echo "<pre></pre>";
                
                
                if($players[$i]->getScore() == $topScore)
                {
                    $echo11 = "<center><h3>" . $players[$i]->getName() . " wins!</h3></center>";
                }
                echo "\n\t</div>\n\t";
                echo "<td>";
                
                if($players[$i]->getScore() == $topScore)
                {
                    echo"<center><h3><b>$echo11</b></h3></center>";
                }
                echo"</td>";
            }
         echo"</tr></table>";
         echo "</center>";
         
?>
<center>
<h2>                 
<a href="http://rnester-cst352.herokuapp.com/homework/hw2/game.php">Play Again</a>                   
</h2>      
</center>
</body>
    <footer>
          <hr>
          R.Nester 2017<br>
          </hr>
    </footer>
</html>