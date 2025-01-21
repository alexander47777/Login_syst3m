<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            background-color: #333;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li {
            margin: 0 10px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        .hero {
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px 20px;
        }
        .hero h1 {
            margin: 0 0 20px;
        }
        .hero p {
            font-size: 18px;
            margin: 0;
        }
        .section {
            padding: 40px 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 20px;
            margin-top: 20px;
        }
        .btn {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            color: white;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
                    <div class="logo">My Website</div>
                    <nav>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                            <?php
                            if(isset($_SESSION["username"])){
                                echo "<li><a href=#>Profile Page</a></li>";
                                echo "<li><a href='logout.php'>Logout</a></li>";
                                
                            }else{
                                echo "<li><a href='#signup'>Signup</a></li>";
                                echo "<li><a href='login.php'>Login</a></li>";
                            }
                            
                            ?>
                        </ul>
                    </nav>
                </header>