<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Ordering System</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>

    <h1>Menu</h1>

    <table>
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>

    <br>

    <form method="POST" action="testGet.php">
        <label for="order">Select an order</label>
        <select name="order" required>
            <option value="Burger">Burger</option>
            <option value="Fries">Fries</option>
            <option value="Steak">Steak</option>
        </select>
        <br><br>

        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" min="1" required>
        <br><br>

        <label for="cash">Cash</label>
        <input type="number" name="cash" min="1" required>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    
</body>
</html>