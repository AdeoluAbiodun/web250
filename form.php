<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adeolu Abiodun's Harmony Breeze | Form Processing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/default.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Montserrat:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <img src="images/logo.png" alt="Harmony Breeze Logo" class="logo">
            <div>
                <h1>Adeolu Abiodun's Harmony Breeze</h1>
                <p>Bringing Rhythm to Every Moment</p>
            </div>
        </div>
        <nav aria-label="Main Navigation">
            <a href="index.html">Home</a> |
            <a href="introduction.html">Introduction</a> |
            <a href="contract.html">Contract</a> |
            <a href="brand.html">Brand</a> |
            <a href="introductionform2.html">Introduction Form</a>
        </nav>
    </header>
    <main>
        <!-- Form 1: POST Method -->
        <h2>Form 1: Using POST Method</h2>
        <form method="POST" action="">
            <label for="post_first_name">First Name:</label>
            <input type="text" id="post_first_name" name="post_first_name" required><br><br>

            <label for="post_last_name">Last Name:</label>
            <input type="text" id="post_last_name" name="post_last_name" required><br><br>

            <label for="post_color">Favorite Genre of Music:</label>
            <select id="post_color" name="post_color">
                <option value="Blues">Blues</option>
                <option value="Classical">Classical</option>
                <option value="Jazz">Jazz</option>
                <option value="Hip-Hop">Hip-Hop</option>
                <option value="Pop">Pop</option>
                <option value="Reggae">Reggae</option>
                <option value="R&B/Soul">R&B/Soul</option>
                <option value="Rock">Rock</option>
            </select><br><br>

            <input type="submit" value="Submit via POST">
        </form>

        <hr>

        <!-- Form 2: GET Method -->
        <h2>Form 2: Using GET Method</h2>
        <form method="GET" action="">
            <label for="get_first_name">First Name:</label>
            <input type="text" id="get_first_name" name="get_first_name" required><br><br>

            <label for="get_last_name">Last Name:</label>
            <input type="text" id="get_last_name" name="get_last_name" required><br><br>

            <label for="get_color">Favorite Genre of Music:</label>
            <select id="get_color" name="get_color">
                <option value="Blues">Blues</option>
                <option value="Classical">Classical</option>
                <option value="Jazz">Jazz</option>
                <option value="Hip-Hop">Hip-Hop</option>
                <option value="Pop">Pop</option>
                <option value="Reggae">Reggae</option>
                <option value="R&B/Soul">R&B/Soul</option>
                <option value="Rock">Rock</option>
            </select><br><br>

            <input type="submit" value="Submit via GET">
        </form>

        <hr>

        <!-- POST Results -->
        <h2>POST Results</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post_first_name'], $_POST['post_last_name'])) {
            $postFirstName = htmlspecialchars($_POST['post_first_name']);
            $postLastName = htmlspecialchars($_POST['post_last_name']);
            $postColor = htmlspecialchars($_POST['post_color']);

            echo "<p>First Name: $postFirstName</p>";
            echo "<p>Last Name: $postLastName</p>";
            echo "<p>Favorite Genre of Music: $postColor</p>";
        } else {
            echo "<p>No POST data submitted.</p>";
        }
        ?>

        <hr>

        <!-- GET Results -->
        <h2>GET Results</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['get_first_name'], $_GET['get_last_name'])) {
            $getFirstName = htmlspecialchars($_GET['get_first_name']);
            $getLastName = htmlspecialchars($_GET['get_last_name']);
            $getColor = htmlspecialchars($_GET['get_color']);

            echo "<p>First Name: $getFirstName</p>";
            echo "<p>Last Name: $getLastName</p>";
            echo "<p>Favorite Color: $getColor</p>";
        } else {
            echo "<p>No GET data submitted.</p>";
        }
        ?>
    </main>

    <footer>
        <nav aria-label="Footer Navigation">
            <a href="https://github.com/adeoluabiodun/">GitHub</a> |
            <a href="https://adeoluabiodun.github.io/">GitHub.io</a> |
            <a href="https://www.codecademy.com/profiles/AdeoluAbiodun">Codecademy</a> |
            <a href="https://www.freecodecamp.org/AdeoluAbiodun">FreeCodeCamp</a> |
            <a href="https://jsfiddle.net/u/AdeoluAbiodun/fiddles/">JSFiddle</a> |
            <a href="https://www.linkedin.com/in/adeolu-abiodun-42a858279/">LinkedIn</a>
        </nav>
        <p>Built by: <em>Adeolu T. Abiodun</em></p>
    </footer>
</body>
</html>