<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Student Registration</title>
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

        /* Info box styling */
        .info-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #e0f7fa;
            margin: 20px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .info-content {
            flex: 1;
            margin-right: 20px;
        }

        .info-content h2 {
            color: #00796b;
            font-size: 28px;
            margin-bottom: 12px;
        }

        .info-content p {
            font-size: 18px;
            margin-bottom: 24px;
        }

        .info-link {
            display: inline-block;
            padding: 12px 24px;
            background-color: #00796b;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 8px;
        }

        .info-link:hover {
            background-color: #004d40;
        }

        .info-box img {
            max-width: 250px;
            border-radius: 12px;
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

        /* Enhanced buttons */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #ff5722;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ff9800;
        }

        /* Content section */
        .content {
            padding: 40px 20px;
            text-align: center;
        }

        .content h2 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 20px;
            margin-bottom: 40px;
        }

        .content .btn {
            font-size: 20px;
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
        <h1>Welcome to the Student Registration Portal</h1>
        <p>Register now to start your journey with us!</p>
        <a href="#" class="btn">Get Started</a>
    </section>

    <!-- Info Box Section -->
    <section class="content">
        <h2>Our Programs</h2>
        <p>We offer a variety of programs to help you succeed in your academic and professional goals.</p>
        <div class="info-box">
            <div class="info-content">
                <h2>Program A</h2>
                <p>Learn the basics of coding and programming with our beginner-friendly course.</p>
                <a href="#" class="info-link">Learn More</a>
            </div>
            <img src="https://via.placeholder.com/250" alt="Program A">
        </div>
        <div class="info-box">
            <div class="info-content">
                <h2>Program B</h2>
                <p>Advance your skills with our intermediate programming course.</p>
                <a href="#" class="info-link">Learn More</a>
            </div>
            <img src="https://via.placeholder.com/250" alt="Program B">
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Student Registration Portal. All rights reserved.</p>
    </footer>

</body>
</html>
