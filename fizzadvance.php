<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adeolu Abiodun's Harmony Breeze | Fizz Buzz Bang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/default.css" rel="stylesheet">
    <script src="scripts/script10.js"></script>
    <script src="https://lint.page/kit/6664c1.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Montserrat:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://lint.page/kit/880bd5.js" crossorigin="anonymous"></script>
</head>
<body>
    <div data-include="components/header.html"></div>
    <div class="container">
        <div class="column">
            <h2>Fizz Buzz Bang</h2>
            <form method="POST" action="">
                <label for="start-number">Start Number:</label>
                <input type="number" id="start-number" name="start" value="<?= $_POST['start'] ?? 1 ?>" required>
                <label for="end-number">End Number:</label>
                <input type="number" id="end-number" name="end" value="<?= $_POST['end'] ?? 100 ?>" required>
                <label for="fizz-word">Fizz Word:</label>
                <input type="text" id="fizz-word" name="fizzWord" value="<?= $_POST['fizzWord'] ?? 'Fizz' ?>" required>
                <label for="buzz-word">Buzz Word:</label>
                <input type="text" id="buzz-word" name="buzzWord" value="<?= $_POST['buzzWord'] ?? 'Buzz' ?>" required>
                <label for="fizz-number">Fizz Number:</label>
                <input type="number" id="fizz-number" name="fizzNum" value="<?= $_POST['fizzNum'] ?? 3 ?>" required>
                <label for="buzz-number">Buzz Number:</label>
                <input type="number" id="buzz-number" name="buzzNum" value="<?= $_POST['buzzNum'] ?? 5 ?>" required>
                <button type="submit" name="generate">Generate</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $start = $_POST['start'];
                $end = $_POST['end'];
                $fizzWord = $_POST['fizzWord'];
                $buzzWord = $_POST['buzzWord'];
                $fizzNum = $_POST['fizzNum'];
                $buzzNum = $_POST['buzzNum'];

                echo "<h3>Results:</h3><pre>";
                for ($i = $start; $i <= $end; $i++) {
                    $output = '';
                    if ($i % $fizzNum === 0) $output .= $fizzWord;
                    if ($i % $buzzNum === 0) $output .= $buzzWord;
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

                echo "<h3>Results:</h3><pre>";
                for ($i = $start; $i <= $end; $i++) {
                    $output = '';
                    if ($i % $fizzNum === 0) $output .= $brandFizzWord;
                    if ($i % $buzzNum === 0) $output .= $brandBuzzWord;
                    echo $output === '' ? $i : $output;
                    echo "\n";
                }
                echo "</pre>";
            }
            ?>
        </div>
    </div>
    <div data-include="components/footer.html"></div>
    <script src="scripts/include.js"></script>
</body>
</html>
