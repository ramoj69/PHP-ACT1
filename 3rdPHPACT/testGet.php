<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Menu items with their prices
        $menu = [
            'Burger' => 50,
            'Fries' => 75,
            'Steak' => 150
        ];

        // Get user input
        $order = $_POST['order'];
        $quantity = $_POST['quantity'];
        $cash = $_POST['cash'];

        // Calculate total cost
        $total_cost = $menu[$order] * $quantity;

        // Display order summary
        echo "<h2>Receipt</h2>";
        echo "<b>Total Price: $total_cost</b> <br>";
        echo "<b>You Paid:  $cash </b><br>";
        // echo "Order: $order <br>";
        // echo "Quantity: $quantity <br>";
     

        // Check if cash is enough
        if ($cash >= $total_cost) {
            $change = $cash - $total_cost;
            echo "<b>Your change is: $change </b>";
        } else {
            $shortage = $total_cost - $cash;
            echo "<b> Insufficient funds. You need $shortage more. </b>";
        }
        
    }


    ?>
