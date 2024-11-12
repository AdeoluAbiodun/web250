<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adeolu Abiodun's Harmony Breeze | Introduction Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/default.css" rel="stylesheet">
    <style>
        #name, #email, #computer {
            width: 300px;
        }
        #background, #professional, #courses, #funny {
            width: 100%;
        }
    </style>
</head>
<body>
    <div data-include="components/header.html"></div>
    <main>
        <h2>Introduction Form</h2>
        <div id="form-container">
            <form id="introduction-form" action="connect.php" Method="post">
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
    <div data-include="components/footer.html"></div>
    <script src="scripts/include.js"></script>
</body>
</html>
