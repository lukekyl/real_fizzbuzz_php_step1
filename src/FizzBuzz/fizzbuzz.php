<?php

/*
 * This file is part of the PHP-CLI package.
 *
 * (c) Kyle Luke <luke.kylew@gmail.com>
 *     <https://github.com/lukekyl>
 *
 * Licensed under MIT license.
 */

 namespace FizzBuzz;

 class App1
 {
     
    public function stepOne($num) {
        // Test to make sure input is an integer. If not, print message.
        if(is_int ($num)) {

            for($i=1;$i<=$num;$i++) {
                $answer = '';

                // If/elseif statements organized to move to the next integer when the correct answer is hit.
                if ($i % 15 == 0) {
                    $answer = 'FizzBuzz';
                }
                elseif ($i % 3 == 0) {
                    $answer = 'Fizz';
                }
                elseif ($i % 5 == 0) {
                    $answer = 'Buzz';
                }
                elseif (!$answer) {
                    $answer = $i;
                }
                
            // Print answer.
            echo $answer . "\n";
            }
        } else {
            echo "Please use integer as input." . "\n";
        }
    }

 }