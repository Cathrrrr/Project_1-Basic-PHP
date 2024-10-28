//Ang return main menu diri kay matabunan sa footer
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Statements</title>
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
        footer {
            margin-top: 20px;
            text-align: center;
        }
        .return-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="content-box">
        <h2>User-defined Functions</h2>
        <p>Problem: Perform various basic statistical calculations on a given set of numbers using at least ten user-defined functions.</p>
        
        <?php
        // Sample data set
        $numbers = [5, 3, 9, 3, 7, 8, 3, 10, 5, 4];

        // 1. Function to calculate the mean
        function calculateMean($arr) {
            $sum = array_sum($arr);
            return $sum / count($arr);
        }

        // 2. Function to calculate the median
        function calculateMedian($arr) {
            sort($arr);
            $count = count($arr);
            $middle = floor($count / 2);

            if ($count % 2) {
                return $arr[$middle];
            } else {
                return ($arr[$middle - 1] + $arr[$middle]) / 2;
            }
        }

        // 3. Function to calculate the mode
        function calculateMode($arr) {
            $values = array_count_values($arr);
            $mode = array_keys($values, max($values));
            return implode(', ', $mode);
        }

        // 4. Function to calculate the range
        function calculateRange($arr) {
            return max($arr) - min($arr);
        }

        // 5. Function to calculate the variance
        function calculateVariance($arr) {
            $mean = calculateMean($arr);
            $sum = 0;
            foreach ($arr as $value) {
                $sum += pow(($value - $mean), 2);
            }
            return $sum / count($arr);
        }

        // 6. Function to calculate the standard deviation
        function calculateStandardDeviation($arr) {
            $variance = calculateVariance($arr);
            return sqrt($variance);
        }

        // 7. Function to calculate the factorial of a number
        function factorial($num) {
            $result = 1;
            for ($i = $num; $i > 0; $i--) {
                $result *= $i;
            }
            return $result;
        }

        // 8. Function to calculate the summation of an array
        function calculateSummation($arr) {
            return array_sum($arr);
        }

        // 9. Function to find the maximum value in an array
        function findMaxValue($arr) {
            return max($arr);
        }

        // 10. Function to find the minimum value in an array
        function findMinValue($arr) {
            return min($arr);
        }

        // Displaying the results using the functions
        echo "<div class='panel'><h3>Results:</h3>";
        echo "<p>Numbers: " . implode(", ", $numbers) . "</p>";
        echo "<p>Mean: " . calculateMean($numbers) . "</p>";
        echo "<p>Median: " . calculateMedian($numbers) . "</p>";
        echo "<p>Mode: " . calculateMode($numbers) . "</p>";
        echo "<p>Range: " . calculateRange($numbers) . "</p>";
        echo "<p>Variance: " . calculateVariance($numbers) . "</p>";
        echo "<p>Standard Deviation: " . calculateStandardDeviation($numbers) . "</p>";
        echo "<p>Factorial of 5: " . factorial(5) . "</p>";
        echo "<p>Summation: " . calculateSummation($numbers) . "</p>";
        echo "<p>Maximum Value: " . findMaxValue($numbers) . "</p>";
        echo "<p>Minimum Value: " . findMinValue($numbers) . "</p>";
        echo "</div>";

        // Explanation of each function
        echo "<div class='panel'><h3>Function Explanations:</h3>";
        echo "<p>1. <b>calculateMean</b>: Computes the average value of the array.</p>";
        echo "<p>2. <b>calculateMedian</b>: Finds the middle value of the sorted array.</p>";
        echo "<p>3. <b>calculateMode</b>: Identifies the most frequently occurring value(s) in the array.</p>";
        echo "<p>4. <b>calculateRange</b>: Calculates the difference between the maximum and minimum values.</p>";
        echo "<p>5. <b>calculateVariance</b>: Measures the spread of the numbers from the mean.</p>";
        echo "<p>6. <b>calculateStandardDeviation</b>: Computes the square root of the variance.</p>";
        echo "<p>7. <b>factorial</b>: Calculates the product of all positive integers up to a given number.</p>";
        echo "<p>8. <b>calculateSummation</b>: Adds up all the numbers in the array.</p>";
        echo "<p>9. <b>findMaxValue</b>: Finds the largest number in the array.</p>";
        echo "<p>10. <b>findMinValue</b>: Finds the smallest number in the array.</p>";
        echo "</div>";
        ?>
   <div class="return-link">
            <a href="index.php">Return to Main Page</a>
        </div>
    <footer>
        <p>
            Created by Catherine A. Rotairo
            <span class="space">Date: October 15, 2024</span>
        </p>
    </footer>
</body>
</html>
</html>