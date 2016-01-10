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
        
            $position = $_GET['board'];
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
            }
            ))))))));
            */
        ?>
        
        <?php
        //game status
            if (winner('x', $squares)) {echo 'Computer wins.';}
            else if (winner('o', $squares)) {echo 'I win.';}
            else {echo 'No winner yet.';}
        ?>
        
    </body>
</html>
