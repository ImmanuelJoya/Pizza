<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Valhalla</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pizzaSize = $_POST["pizza_size"];
        $pizzaShape = $_POST["pizza_shape"];
        $toppings = $_POST["toppings"];
        $crust = $_POST["crust"];
        $delivery = $_POST["delivery"];
        $name = $_POST["Name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];

        $toppings = implode(', ', $toppings);

        $confirmation_message = "Thank you for your order, your order details are:";

        echo "<h2>$confirmation_message</h2>";
        echo "<p>Size: $pizzaSize</p>";
        echo "<p>Shape: $pizzaShape</p>";
        echo "<p>Toppings: $toppings</p>";
        echo "<p>Crust: $crust</p>";
        echo "<p>Delivery: $delivery</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Email: $email</p>";
    }
    ?>