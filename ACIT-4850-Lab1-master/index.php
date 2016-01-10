<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        //nerd.
            /*$hoursworked = $_GET['hours'];
            $rate = 12;
            $total = $hoursworked * $rate;
            
            $name = 'Jim';
            $what = 'geek';
            $level = 10;
            
            //overtime
            if ($hoursworked > 40){
                $total = $hoursworked * $rate * 1.5;
            } else {
                $total = $hoursworked * $rate;
            }
            
            echo 'Hi, my name is '.$name,'. and I am a level '.$level.'
            '.$what;
            echo '<br/>';
            echo ($total > 0) ? 'You owe me $' .$total : "you're welcome";
            */
        
            /*$position = $_GET['board'];
            $squares = str_split($position);
            
            function winner($token,$position) {
                $won = false;
                if (($position[0] == $token) && 
                        ($position[1] == $token) &&
                        ($position[2] == $token)) {
                    $won = true;
                        } else if (($position[3] == $token) &&
                        ($position[4] == $token) &&
                        ($position[5] == $token)) {
                            $won = true;
                        } else if (($position[6] == $token) &&
                        ($position[7] == $token) &&
                        ($position[8] == $token)) {
                            $won = true;
                        } else if (($position[0] == $token) &&
                        ($position[3] == $token) &&
                        ($position[6] == $token)) {
                            $won = true;
                        } else if (($position[1] == $token) &&
                        ($position[4] == $token) &&
                        ($position[7] == $token)) {
                            $won = true;
                        } else if (($position[2] == $token) &&
                        ($position[5] == $token) &&
                        ($position[8] == $token)) {
                            $won = true;
                        } else if (($position[0] == $token) &&
                        ($position[4] == $token) &&
                        ($position[8] == $token)) {
                            $won = true;
                        } else if (($position[2] == $token) &&
                        ($position[4] == $token) &&
                        ($position[6] == $token)) {
                            $won = true;
                        }
                    return $won;
            }
             */
        
            /*$theywon = false;
            if(($squares[0] == 'x') && ($squares[1] == 'x') && ($squares[2] == 'x')
            {
                $theywon = true;
            } else if (($squares[3] == 'x') && ($squares[4] == 'x') && ($squares[5] == 'x')
            {
                $theywon = true;
            } else if (($squares[6] == 'x') && ($squares[7] == 'x') && ($squares[8] == 'x')
            {
                $theywon = true;
            } else if (($squares[0] == 'x') && ($squares[3] == 'x') && ($squares[6] == 'x')
            {
                $theywon = true;
            } else if (($squares[1] == 'x') && ($squares[4] == 'x') && ($squares[7] == 'x')
            {
                $theywon = true;
            } else if (($squares[2] == 'x') && ($squares[5] == 'x') && ($squares[8] == 'x')
            {
                $theywon = true;
            } else if (($squares[0] == 'x') && ($squares[4] == 'x') && ($squares[8] == 'x')
            {
                $theywon = true;
            } else if (($squares[3] == 'x') && ($squares[4] == 'x') && ($squares[6] == 'x')
            {
                $theywon = true;
            }
            ))))))));
            
            $wewon = false;
            if(($squares[0] == 'x') && ($squares[1] == 'x') && ($squares[2] == 'x')
            {
                $wewon = true;
            } else if (($squares[3] == 'x') && ($squares[4] == 'x') && ($squares[5] == 'x')
            {
                $wewon = true;
            } else if (($squares[6] == 'x') && ($squares[7] == 'x') && ($squares[8] == 'x')
            {
                $wewon = true;
            } else if (($squares[0] == 'x') && ($squares[3] == 'x') && ($squares[6] == 'x')
            {
                $wewon = true;
            } else if (($squares[1] == 'x') && ($squares[4] == 'x') && ($squares[7] == 'x')
            {
                $wewon = true;
            } else if (($squares[2] == 'x') && ($squares[5] == 'x') && ($squares[8] == 'x')
            {
                $wewon = true;
            } else if (($squares[0] == 'x') && ($squares[4] == 'x') && ($squares[8] == 'x')
            {
                $wewon = true;
            } else if (($squares[3] == 'x') && ($squares[4] == 'x') && ($squares[6] == 'x')
            {
                $wewon = true;
            }x--xoox--
            ))))))));
            */
        ?>
        
        <?php/*
        //game status
        //horizontal check
            for($row=0; $row<3; $row++){
                if(($position[3*$row] == $token) && 
                        ($position[3*$row+1] == $token) &&
                        ($position[3*$row+2] == $token)){
                            $won = true;
                        }
            }
            
            for($row=0; $row<3; $row++){
                $result = true;
                for($col=0; $col<3; $col++){
                    if($position[3*$row+$col] != $token){
                        $result = false;
                    }
                }
            }
            
        //announces state of the game
            if (winner('x', $squares)) {echo 'Computer wins.';}
            else if (winner('o', $squares)) {echo 'I win.';}
            else {echo 'No winner yet.';}*/
        ?>
        <?php
        if (!isset($_GET['board'])) {
            echo "Tic-Tac-Toe-asaurus <br>";
            $squares = "---------";
        } else {
            $squares = $_GET['board'];
        }

        // put your code here
        $game = new Game($squares);
        if ($game->winner('x')) {
            echo 'I win clap clap clap';
        } else if ($game->winner('o')) {
            echo 'Computer wins ohhhhh noes';
        } else {
            $game->next();
            echo 'Whats a winner.';
        }
        $game->display();
        echo "<br> <a href='?'>New Game</a> <br>";

        
        //Java TTT class
        class Game {
            var $position;

            function __construct($squares) {
                $this->position = str_split($squares);
            }

            function winner($token) {
                $won = false;
                if (($this->position[0] == $token) &&
                        ($this->position[1] == $token) &&
                        ($this->position[2] == $token)) {
                    $won = true;
                } else if (($this->position[3] == $token) &&
                        ($this->position[4] == $token) &&
                        ($this->position[5] == $token)) {
                    $won = true;
                } else if (($this->position[6] == $token) &&
                        ($this->position[7] == $token) &&
                        ($this->position[8] == $token)) {
                    $won = true;
                } else if (($this->position[0] == $token) &&
                        ($this->position[3] == $token) &&
                        ($this->position[6] == $token)) {
                    $won = true;
                } else if (($this->position[1] == $token) &&
                        ($this->position[4] == $token) &&
                        ($this->position[7] == $token)) {
                    $won = true;
                } else if (($this->position[2] == $token) &&
                        ($this->position[5] == $token) &&
                        ($this->position[8] == $token)) {
                    $won = true;
                } else if (($this->position[0] == $token) &&
                        ($this->position[4] == $token) &&
                        ($this->position[8] == $token)) {
                    $won = true;
                } else if (($this->position[2] == $token) &&
                        ($this->position[4] == $token) &&
                        ($this->position[6] == $token)) {
                    $won = true;
                }
                return $won;
            }

            function display() {
                echo '<table cols="3" style="font-size:large; font-weight:bold">';
                echo '<tr>'; 
                for ($pos = 0; $pos < 9; $pos++) {
                    echo $this->show($pos);
                    if ($pos % 3 == 2) {
                        echo '</tr><tr>';
                    }
                }
                echo '</tr>'; //close the last row
                echo '</table>';
            }

            function show($which) {
                $token = $this->position[$which];
                if ($token <> '-') {
                    return '<td>' . $token . '</td>';
                }
                $this->newposition = $this->position;
                $this->newposition[$which] = 'x';
                $move = implode($this->newposition);
                $link = '?board=' . $move;
                return '<td><a href=' . $link . '>-</a></td>';
            }

            function next() {
                $fill = false;
                do {
                    $next = rand(0, 8);
                    if ($this->position[$next] == '-') {
                        $this->position[$next] = 'o';
                        $fill = true;
                    }
                } while (!$fill);
            }
        }
        ?>

    </body>
</html>
