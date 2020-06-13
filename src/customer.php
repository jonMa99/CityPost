<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <Title>My Account</Title>
    <style>
        .header {
            background-color: rgb(102, 102, 102);
            padding: 40px 40px 40px 40px;
            margin: 0px;
        }

        body {
            background-color: #8cd38c;
            margin: 0px;
            padding: 0px;
        }

        .logout-button {
            float: right;
        }

        .customer-option-button {
            background-color: blue;
            border: 2px solid black;
            border-radius: 4px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            transition-duration: 0.4s;
        }

        .customer-option-button:hover {
            background-color: darkblue;
            color: white;
        }

        .customer-options {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>My Account</h1>
        <?php
        echo "Hi " . $_SESSION["username"] . "<br/>";
        ?>
        <!-- php for customer info -->
        <div class="logout">
            <button class="logout-button">Logout</button>
        </div>
    </div>

    <div class="customer-options">
        <button class="customer-option-button">Order History</button>
        <!-- add php -->
        <button class="customer-option-button">Place Order</button>
        <!-- add php -->
    </div>
</body>

</html>