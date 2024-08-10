<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* General styling */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        /* Navigation styling */
        header nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #ff5722;
            overflow: hidden;
        }

        header nav ul li {
            float: left;
        }

        header nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 16px 24px;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }

        header nav ul li a:hover {
            background-color: #ff9800;
        }

        /* Hero section */
        .hero {
            background-color: #00796b;
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 24px;
            margin-bottom: 40px;
        }

        .hero a {
            padding: 14px 28px;
            background-color: #ff9800;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .hero a:hover {
            background-color: #e65100;
        }

        /* Registration form styling */
        .registration-form {
            max-width: 500px;
            margin: 40px auto;
            padding: 20px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .registration-form h2 {
            margin-bottom: 20px;
            font-size: 32px;
            color: #00796b;
            text-align: center;
        }

        .registration-form label {
            font-size: 18px;
            color: #333;
            display: block;
            margin-bottom: 10px;
        }

        .registration-form input[type="text"],
        .registration-form input[type="email"],
        .registration-form input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        .registration-form button {
            width: 100%;
            padding: 14px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .registration-form button:hover {
            background-color: #004d40;
        }

        .registration-form .error-message {
            color: #e53935;
            font-size: 16px;
            margin-bottom: 20px;
            text-align: center;
        }

        .registration-form .success-message {
            color: #43a047;
            font-size: 16px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Footer styling */
        footer {
            text-align: center;
            padding: 24px;
            background-color: #00796b;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Student Registration Portal</h1>
        <p>Register now to start your academic journey with us!</p>
        <a href="#register" class="btn">Register Now</a>
    </section>

    <!-- Registration Form -->
    <section id="register" class="registration-form">
        <h2>Register</h2>

        <?php
        // Include your existing PHP registration logic here
        $error = $success = '';

        // Example PHP logic for handling form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Add your validation and database insertion logic here
            // Example:
            if (empty($name) || empty($email) || empty($password)) {
                $error = "All fields are required.";
            } else {
                // Assume registration is successful
                $success = "Registration successful!";
            }
        }
        ?>

        <?php if ($error): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="success-message"><?php echo $success; ?></div>
        <?php endif; ?>

        <form method="post" action="">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">

            <button type="submit">Register</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Student Registration Portal. All rights reserved.</p>
    </footer>

</body>
</html>
