<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manager Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        td {
            padding-top: 10px;
            border-bottom-style: solid;
            border-bottom-color: black;
            border-bottom-width: 2px;
        }

        #terminate-button {
            background-color: red;
            border: 2px solid black;
            border-radius: 4px;
            color: white;
            padding: 10px 32px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            transition-duration: 0.4s;
        }

        #termiante-button:hover {
            background-color: darkred;
            color: white;
        }

        #list_emp {
            padding: 8px 30px;
        }

        #terminate {
            text-align: center;
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
            padding: 10px 10px 10px;
            text-align: center;
        }

    </style>
</head>

<body>
    <!-- TODO: Make welcome page like customer using saved session name -->

    <div class="header">
        <h1>Manager Control Panel</h1>
        <?php
        $_SESSION['returnpage'] = '../src/manager.php';
        echo "Welcome Manager " . $_SESSION["username"] . "<br/>";
        ?>
        <div class="account">
            <button onclick="window.location.href='../src/login.html'" class="account-button">Logout</button>
            <button onclick="window.location.href='../src/updatepassword.html'" class="account-button">Change Password</button>
        </div>

    </div>
       <div class="customer-options">
        <button onclick="window.location.href='../src/schedule.php'" class="customer-option-button">View Schedule</button>
        <!-- add php -->
        <button onclick="window.location.href='../src/employee.php'" class="customer-option-button">View Employees</button>

        <button onclick="window.location.href='../src/routes.php'" class="customer-option-button">Set Routes</button>
        <!-- TODO -->
    </div>
    <?php

   