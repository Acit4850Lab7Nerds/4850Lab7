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
            $hoursworked = 10;
            $rate = 12;
            $total = $hoursworked * $rate;

            $name = 'Jim';
            $what = 'geek';
            $level = 10;
            echo 'Hi, my name is '.$name,'. and I am a level '.$level.'
            '.$what;
            echo '<br/>';
            echo 'you owe me $' .$total;
            
        ?>
    </body>
</html>
