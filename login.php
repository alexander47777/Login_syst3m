<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, #0f2027, #203a43, #2c5364);
            overflow: hidden;
            font-family: Arial, sans-serif;
            color: white;
        }

        .stars {
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/stardust.png');
            animation: twinkle 5s infinite;
        }

        @keyframes twinkle {
            0% {
                opacity: 0.8;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0.8;
            }
        }

        .login-container {
            z-index: 2;
            background: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
            width: 300px;
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .login-container h1 {
            margin-bottom: 1.5rem;
        }

        .login-container input {
            width: 90%;
            padding: 0.7rem;
            margin: 0.5rem 0;
            border: none;
            border-radius: 5px;
            outline: none;
        }

        .login-container button {
            width: 95%;
            padding: 0.7rem;
            border: none;
            border-radius: 5px;
            background: #1e90ff;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-container button:hover {
            background: #4682b4;
        }

        .planets {
            position: absolute;
            bottom: -150px;
            left: -200px;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, #ffcc00, #ff9900);
            border-radius: 50%;
            filter: blur(80px);
            animation: float 10s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>
<body>
    <div class="stars"></div>
    <div class="planets"></div>
    <div class="login-container">
        <h1>Login</h1>
        <form action="./includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="Username/Email..." >
            <input type="password" name='pwd' placeholder="Password..." >
            <button type="submit" name="submit">LogIn</button>
        </form>
    </div>
</body>
</html>
