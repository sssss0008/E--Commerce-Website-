<?php
session_start();

// Handle Login
if (isset($_POST['login'])) {
    $_SESSION['loggedin'] = true;
}

// Handle Logout
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: contact.php");
    exit();
}

// Handle Contact Form Submission
if (isset($_POST['send_message']) && isset($_SESSION['loggedin'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    echo "<script>alert('Thank you, $name! Your message has been sent.')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        h1, h2 {
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: fadeIn 1s ease-in-out;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #444;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.8);
            box-shadow: 0 4px 20px rgba(0, 255, 0, 0.2);
            animation: slideDown 1s ease-in-out;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-size: 16px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #00ff00;
            border-radius: 5px;
            background: transparent;
            color: #fff;
            font-size: 16px;
        }
        input::placeholder, textarea::placeholder {
            color: #aaa;
        }
        .btn {
            width: 100%;
            background: #00ff00;
            color: #000;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background: #32cd32;
        }
        .logout {
            text-align: center;
            margin-top: 15px;
        }
        .logout button {
            background: #444;
            color: #fff;
            border: 1px solid #00ff00;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .logout button:hover {
            background: #555;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideDown {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>

<?php if (!isset($_SESSION['loggedin'])): ?>
    <!-- Login Form -->
    <div class="container">
        <h2>Login</h2>
        <form method="POST">
            <button type="submit" name="login" class="btn">Login</button>
        </form>
    </div>
<?php else: ?>
    <!-- Contact Form -->
    <div class="container">
        <h1>Contact Us</h1>
        <form method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder="Your Name">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Your Email">

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required placeholder="Your Message"></textarea>

            <button type="submit" name="send_message" class="btn">Send Message</button>
        </form>
        <div class="logout">
            <form method="POST">
                <button type="submit" name="logout">Logout</button>
            </form>
        </div>
    </div>
<?php endif; ?>

</body>
</html>
