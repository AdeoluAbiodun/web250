<!DOCTYPE html>
<html lang="en">
<head>
    <title>FizzBuzzBang</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="default.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <div class="column">
            <h2>Classic FizzBuzz</h2>
            <form method="POST" action="">
                <label for="start">Start Number:</label>
                <input type="number" id="start" name="start" value="<?= $_POST['start'] ?? 1 ?>" required>
                <label for="end">End Number:</label>
                <input type="number" id="end" name="end" value="<?= $_POST['end'] ?? 100 ?>" required>
                <label for="fizzWord">Fizz Word:</label>
                <input type="text" id="fizzWord" name="fizzWord" value="<?= $_POST['fizzWord'] ?? 'Fizz' ?>" required>
                <label for="buzzWord">Buzz Word:</label>
                <input type="text" id="buzzWord" name="buzzWord" value="<?= $_POST['buzzWord'] ?? 'Buzz' ?>" required>
                <label for="fizzNum">Fizz Number:</label>
                <input type="number" id="fizzNum" name="fizzNum" value="<?= $_POST['fizzNum'] ?? 3 ?>" required>
                <label for="buzzNum">Buzz Number:</label>
                <input type="number" id="buzzNum" name="buzzNum" value="<?= $_POST['buzzNum'] ?? 5 ?>" required>
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
            <h2>Brand Themed FizzBuzz</h2>
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
    <?php include 'footer.php'; ?>
</body>
</html>
