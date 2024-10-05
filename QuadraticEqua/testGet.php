<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get values from form
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            // Calculate the discriminant: b² - 4ac
            $discriminant = ($b * $b) - (4 * $a * $c);

            // Display the result
            echo $discriminant;
        }