<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Statements</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
        }
        .content-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .panel {
            border: 1px solid #d4b59e;
            border-radius: 12px;
            background-color: #D2B48C;
            padding: 15px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="content-box">
        <h2>Selection Statements</h2>
        <?php
        // Initialize five string variables
        $strings = ["Apple", "Banana", "Orange", "Grape", "Mango"];

        // Initialize five integer variables
        $numbers = [12, 7, 5, 3, 15];

        // Manual bubble sort for strings in ascending order
        for ($i = 0; $i < count($strings) - 1; $i++) {
            for ($j = 0; $j < count($strings) - $i - 1; $j++) {
                if ($strings[$j] > $strings[$j + 1]) {
                    $temp = $strings[$j];
                    $strings[$j] = $strings[$j + 1];
                    $strings[$j + 1] = $temp;
                }
            }
        }

        // Display sorted strings in ascending order
        echo "<div class='panel'><h3>Strings in Ascending Order:</h3><p>";
        foreach ($strings as $string) {
            echo $string . " ";
        }
        echo "</p></div>";

        // Manual bubble sort for strings in descending order
        for ($i = 0; $i < count($strings) - 1; $i++) {
            for ($j = 0; $j < count($strings) - $i - 1; $j++) {
                if ($strings[$j] < $strings[$j + 1]) {
                    $temp = $strings[$j];
                    $strings[$j] = $strings[$j + 1];
                    $strings[$j + 1] = $temp;
                }
            }
        }

        // Display sorted strings in descending order
        echo "<div class='panel'><h3>Strings in Descending Order:</h3><p>";
        foreach ($strings as $string) {
            echo $string . " ";
        }
        echo "</p></div>";

        // Check if the first number is divisible by the fifth number
        if ($numbers[0] % $numbers[4] == 0) {
            $sum = array_sum($numbers);
            $product = 1;
            foreach ($numbers as $num) {
                $product *= $num;
            }
            $average = $sum / count($numbers);

            // Display sum, product, and average
            echo "<div class='panel'><h3>Calculations:</h3>";
            echo "<p>Sum of the numbers: $sum</p>";
            echo "<p>Product of the numbers: $product</p>";
            echo "<p>Average of the numbers: $average</p>";
            echo "</div>"; // Close the calculations panel
        } else {
            // Manual bubble sort for numbers in ascending order
            for ($i = 0; $i < count($numbers) - 1; $i++) {
                for ($j = 0; $j < count($numbers) - $i - 1; $j++) {
                    if ($numbers[$j] > $numbers[$j + 1]) {
                        $temp = $numbers[$j];
                        $numbers[$j] = $numbers[$j + 1];
                        $numbers[$j + 1] = $temp;
                    }
                }
            }

            // Display sorted numbers in ascending order
            echo "<div class='panel'><h3>Numbers in Ascending Order:</h3><p>";
            foreach ($numbers as $number) {
                echo $number . " ";
            }
            echo "</p></div>"; // Close the numbers panel
        }
        ?>
        <!-- "Return to Main Page" link outside the panels -->
        <a href='index.php'>Return to Main Page</a>
    </div>
    <footer>
        <p>
            Created by Catherine A. Rotairo
            <span class="space">Date: October 14, 2024</span>
        </p>
    </footer>
</body>
</html>
