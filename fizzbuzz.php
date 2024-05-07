<?php
// Lab 1, part 2
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab 1, Part 2</title>
    </head>

    <body>
        <?php

        for ($i = 1; $i <= 100; $i++) {
            // Initialize an empty string to store output for the current number
            $output = "";

            // Check for divisibility by 3
            if ($i % 3 === 0) {
                $output .= "<b>Fizz</b>";
            }

            // Check for divisibility by 5
            if ($i % 5 === 0) {
                $output .= "<b>Buzz</b>";
            }

            // If $output is still empty, the number is neither divisible by 3 nor 5
            if ($output === "") {
                $output = $i;
            }

            // Print the output followed by a newline
            echo $output . "<br>";
        }

        ?>
    </body>
</html>