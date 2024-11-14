<?php
// Check if the form is submitted and process the form data if it is
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $background = $_POST['background'];
    $professional = $_POST['professional'];
    $courses = $_POST['courses'];
    $computer = $_POST['computer'];
    $funny = $_POST['funny'];
    $contact = $_POST['contact'];
    $interests = isset($_POST['interests']) ? implode(", ", $_POST['interests']) : 'None selected';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adeolu Abiodun's Harmony Breeze | Introduction Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Montserrat:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script src="scripts/script.js" defer></script>
</head>
<body>

    <!-- Include Header -->
    <?php include 'header.php'; ?>

    <main>
        <h2>Introduction Form</h2>
        <figure>
          <img src="images/img_5690.jpg" alt="Photograph taken during a tour of Myrtle Beach, S.C" width="300px" height="200px">
          <figcaption>Touring of Myrtle Beach, SC.</figcaption>
        </figure>

        <div id="form-container">
            <?php if (isset($background)): ?>
                <!-- Display the submitted data -->
                <h3>Submission Summary</h3>
                <p><strong>Personal Background:</strong> <?= htmlspecialchars($background); ?></p>
                <p><strong>Professional Experience:</strong> <?= htmlspecialchars($professional); ?></p>
                <p><strong>Courses I am Taking and Why:</strong> <?= htmlspecialchars($courses); ?></p>
                <p><strong>Primary Computer Platform:</strong> <?= htmlspecialchars($computer); ?></p>
                <p><strong>Funny/Interesting Item:</strong> <?= htmlspecialchars($funny); ?></p>
                <p><strong>Preferred Contact Method:</strong> <?= htmlspecialchars($contact); ?></p>
                <p><strong>Interests:</strong> <?= htmlspecialchars($interests); ?></p>
            <?php else: ?>
                <!-- Display the form if it hasn’t been submitted -->
                <form id="introduction-form" action="" method="POST">
                    <fieldset>
                        <label for="background">Personal Background:</label>
                        <textarea id="background" name="background" rows="4">Obtained a four-year degree in Business Communication from Nigeria and certified as a Data Analyst...</textarea><br><br>

                        <label for="professional">Professional Experience:</label>
                        <textarea id="professional" name="professional" rows="4">Started as an NGO administrator in 2009, transitioned to banking...</textarea><br><br>

                        <label for="courses">Courses I am Taking and Why:</label>
                        <textarea id="courses" name="courses" rows="4">WEB215 - Adv. Markup and Scripting...</textarea><br><br>

                        <label for="computer">Primary Computer Platform:</label>
                        <input type="text" id="computer" name="computer" value="Windows 11" required><br><br>

                        <label for="funny">Funny/Interesting Item:</label>
                        <textarea id="funny" name="funny" rows="2">I have a deep appreciation for jazz saxophone music.</textarea><br><br>
                    </fieldset>

                    <fieldset>
                        <legend>Additional Information</legend>
                        <label>Preferred Contact Method:</label>
                        <input type="radio" id="contact-email" name="contact" value="Email" checked>
                        <label for="contact-email">Email</label>
                        <input type="radio" id="contact-phone" name="contact" value="Phone">
                        <label for="contact-phone">Phone</label><br>

                        <label>Interests:</label>
                        <input type="checkbox" id="interest-coding" name="interests[]" value="Coding">
                        <label for="interest-coding">Coding</label>
                        <input type="checkbox" id="interest-music" name="interests[]" value="Music" checked>
                        <label for="interest-music">Music</label>
                        <input type="checkbox" id="interest-travel" name="interests[]" value="Travel">
                        <label for="interest-travel">Travel</label>
                        <input type="checkbox" id="interest-reading" name="interests[]" value="Reading" checked>
                        <label for="interest-reading">Reading</label>
                    </fieldset>

                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </form>
            <?php endif; ?>
        </div>
    </main>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

</body>
</html>