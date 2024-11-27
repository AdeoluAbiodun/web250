<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adeolu Abiodun's Harmony Breeze | Everything Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/default.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Montserrat:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://lint.page/kit/880bd5.js" crossorigin="anonymous"></script>
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
    <h2>Customer Information Form</h2>
    <form method="POST" action="">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" pattern="[0-9]{10}" title="Enter a 10-digit phone number">

        <label>Preferred Contact Method:</label>
        <div class="radio-group">
            <label><input type="radio" name="contact_method" value="Email" required>Email</label>
            <label><input type="radio" name="contact_method" value="Phone">Phone</label>
            <label><input type="radio" name="contact_method" value="Text">Text</label>
        </div>

        <label>What services are you interested in?</label>
        <div class="checkbox-group">
            <label><input type="checkbox" name="services[]" value="Live Band">Live Band</label>
            <label><input type="checkbox" name="services[]" value="DJ">DJ</label>
            <label><input type="checkbox" name="services[]" value="Event Coordination">Event Coordination</label>
            <label><input type="checkbox" name="services[]" value="Saxophone Performance">Saxophone Performance</label>
        </div>

        <label for="event_type">Type of Event:</label>
        <select id="event-type" name="event-type" required>
            <option value="">-- Select --</option>
            <option value="Wedding">Wedding</option>
            <option value="Birthday Party">Birthday Party</option>
            <option value="Corporate Event">Corporate Event</option>
            <option value="Private Party">Private Party</option>
        </select>

        <label for="comments">Additional Comments:</label>
        <textarea id="comments" name="comments" rows="4" placeholder="Add any specific requests or details..."></textarea>

        <input type="hidden" name="form_id" value="everything_form">

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<div class="results">';
        echo '<h2>Form Results:</h2>';
        
        // Process Form Inputs
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $phone = htmlspecialchars($_POST['phone']);
        $contactMethod = htmlspecialchars($_POST['contact_method']);
        $services = isset($_POST['services']) ? $_POST['services'] : [];
        $eventType = htmlspecialchars($_POST['event-type']);
        $comments = htmlspecialchars($_POST['comments']);
        $formId = htmlspecialchars($_POST['form_id']);

        // Output Form Results
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Password:</strong> (hidden)</p>";
        echo "<p><strong>Phone:</strong> $phone</p>";
        echo "<p><strong>Preferred Contact Method:</strong> $contactMethod</p>";
        
        echo "<p><strong>Services Interested In:</strong> ";
        echo !empty($services) ? implode(', ', $services) : 'None';
        echo "</p>";

        echo "<p><strong>Event Type:</strong> $eventType</p>";
        echo "<p><strong>Additional Comments:</strong> $comments</p>";
        echo "<p><strong>Form ID:</strong> $formId</p>";
        echo '</div>';
    }
    ?>
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
