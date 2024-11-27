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
            <div class="container">
                <div class="column">
                    <h2>Fizz Buzz Bang</h2>
                    <form method="POST" action="">
                        <label for="start-number">Start Number:</label>
                        <input type="number" id="start-number" name="start" value="<?= $_POST['start'] ?? 1 ?>" required>
                        <label for="end-number">End Number:</label>
                        <input type="number" id="end-number" name="end" value="<?= $_POST['end'] ?? 105 ?>" required>
                        <label for="fizz-word">Fizz Word:</label>
                        <input type="text" id="fizz-word" name="fizzWord" value="<?= $_POST['fizzWord'] ?? 'Fizz' ?>" required>
                        <label for="buzz-word">Buzz Word:</label>
                        <input type="text" id="buzz-word" name="buzzWord" value="<?= $_POST['buzzWord'] ?? 'Buzz' ?>" required>

                        <label for="bang-word">Bang Word:</label>
                        <input type="text" id="bang-word" name="bangWord" value="<?= $_POST['bangWord'] ?? 'Bang' ?>" required>

                        <label for="fizz-number">Fizz Number:</label>
                        <input type="number" id="fizz-number" name="fizzNum" value="<?= $_POST['fizzNum'] ?? 3 ?>" required>
                        <label for="buzz-number">Buzz Number:</label>
                        <input type="number" id="buzz-number" name="buzzNum" value="<?= $_POST['buzzNum'] ?? 5 ?>" required>

                        <label for="bang-number">Bang Number:</label>
                        <input type="number" id="bang-number" name="bangNum" value="<?= $_POST['bangNum'] ?? 7 ?>" required>

                        <button type="submit" name="generate">Generate</button>
                    </form>

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $start = $_POST['start'];
                        $end = $_POST['end'];
                        $fizzWord = $_POST['fizzWord'];
                        $buzzWord = $_POST['buzzWord'];
                        $bangWord = $_POST['bangWord'];
                        $fizzNum = $_POST['fizzNum'];
                        $buzzNum = $_POST['buzzNum'];
                        $bangNum = $_POST['bangNum'];

                        echo "<h3>Results:</h3><pre>";
                        for ($i = $start; $i <= $end; $i++) {
                            $output = '';
                            if ($i % $fizzNum === 0) $output .= $fizzWord;
                            if ($i % $buzzNum === 0) $output .= $buzzWord;
                            if ($i % $bangNum === 0) $output .= $bangWord;
                            echo $output === '' ? $i : $output;
                            echo "\n";
                        }
                        echo "</pre>";
                    }
                    ?>
                </div>

                <div class="column">
                    <h2>Brand-Inspired FizzBuzzBang</h2>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $brandFizzWord = "Harmony";
                        $brandBuzzWord = "Breeze";
                        $brandBangWord = "Limited";

                        echo "<h3>Results:</h3><pre>";
                        for ($i = $start; $i <= $end; $i++) {
                            $output = '';
                            if ($i % $fizzNum === 0) $output .= $brandFizzWord;
                            if ($i % $buzzNum === 0) $output .= $brandBuzzWord;
                            if ($i % $bangNum === 0) $output .= $brandBangWord;
                            echo $output === '' ? $i : $output;
                            echo "\n";
                        }
                        echo "</pre>";
                    }
                    ?>
                </div>
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
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let formSubmitting = false;

        const forms = document.querySelectorAll("form");
        forms.forEach((form) => {
        form.addEventListener("submit", function () {
            formSubmitting = true;
            localStorage.setItem("formSubmitted", "true");
        });
        });

        const wasFormSubmitted = localStorage.getItem("formSubmitted");
        if (!formSubmitting && !wasFormSubmitted) {
        // If not form submission, prompt the user
        let userName = prompt("Please enter your name:");
        if (userName) {
            alert("Hello, " + userName + "! Welcome to my FizzBuzzBang page.");
        } else {
            alert("Hello! Welcome to my FizzBuzzBang page.");
        }
        }

        // Clear the flag after the page loads to reset
        localStorage.removeItem("formSubmitted");
    });
    </script>

</body>
</html>