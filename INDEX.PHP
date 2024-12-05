<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #000;
            color: #fff;
        }
        h1 {
            margin-top: 20%;
            color: #00ff00;
            animation: fadeIn 1.5s;
        }
        .btn {
            background: #00ff00;
            color: #000;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn:hover {
            background: #32cd32;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <h1>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
            Welcome to the Dashboard
        <?php else: ?>
            Please Log In
        <?php endif; ?>
    </h1>
    <a href="<?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'logout.php' : 'login.php'; ?>">
        <button class="btn">
            <?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'Logout' : 'Login'; ?>
        </button>
    </a>
</body>
</html>
