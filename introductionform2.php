<!DOCTYPE html>
 <html lang="en">
    <head>
        <title>Adeolu Abiodun's Harmony Breeze | Home </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/default.css" rel="stylesheet">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Montserrat:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
        <script src="scripts/script.js"></script>
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
        <main>
        <h2>Introduction Form</h2>
         <figure>
          <img src="images/img_5690.jpg" alt="Photograph taken during a tour of Myrtle Beach, S.C" width="300px" height="200px">
          <figcaption>Touring of Myrtle Beach, SC.</figcaption>
        </figure>
        <div id="form-container">
            <form id="introduction-form" action="connect.php" method="post">
                <fieldset>
                    <legend>Personal Information</legend>
                    
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="Adeolu Abiodun" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="adeolu@example.com" required><br><br>

                    <label for="background">Personal Background:</label>
                    <textarea id="background" name="background" rows="4">Obtained a four-year degree in Business Communication from Nigeria and certified as a Data Analyst through a bootcamp in Washington, DC, in 2020. Currently pursuing a two-year Full Stack Development program.</textarea><br><br>

                    <label for="professional">Professional Experience:</label>
                    <textarea id="professional" name="professional" rows="4">Started as an NGO administrator in 2009, transitioned to banking in 2014 as a marketer. Moved to the USA in 2020 and shifted to Data Analysis. Currently returning to education to become a Full Stack Developer.</textarea><br><br>

                    <label for="courses">Courses I am Taking and Why:</label>
                    <textarea id="courses" name="courses" rows="4">WEB215 - Adv. Markup and Scripting: Advancing my knowledge of HTML and CSS.
WEB250 - Data Driven Websites: It is required for the degree. However, I believe I am going to like this course.
CSC121 - Python Programming: I believe this is one of the most important classes for becoming the skilled full stack developer I aspire to be.</textarea><br><br>

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
                    <input type="checkbox" id="interest-coding" name="interests" value="Coding">
                    <label for="interest-coding">Coding</label>
                    <input type="checkbox" id="interest-music" name="interests" value="Music" checked>
                    <label for="interest-music">Music</label>
                    <input type="checkbox" id="interest-travel" name="interests" value="Travel">
                    <label for="interest-travel">Travel</label>
                    <input type="checkbox" id="interest-reading" name="interests" value="Reading" checked>
                    <label for="interest-reading">Reading</label>
                </fieldset>

                <button type="submit">Submit</button>
            </form>
        </div>
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
