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
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
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
        <h2>Loop Statements</h2>

        <?php
        // Declare variables n and m
        $n = 10; // Example value for n
        $m = 10; // Example value for m

        // Display n x m multiplication table using for loop
        echo "<div class='panel'><h3>Multiplication Table of $n x $m:</h3>";
        echo "<table>";
        
        // Table header row
        echo "<tr><th>*</th>";
        for ($j = 1; $j <= $m; $j++) {
            echo "<th>$j</th>";
        }
        echo "</tr>";

        // Table rows for each multiplication line
        for ($i = 1; $i <= $n; $i++) {
            echo "<tr><th>$i</th>"; // Row header
            for ($j = 1; $j <= $m; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }
        echo "</table></div>";

        // Other calculations (Fibonacci, factorial, etc.) remain the same
        // Display n Fibonacci series using while loop
        echo "<div class='panel'><h3>Fibonacci Series up to $n terms:</h3><p>";
        $a = 0;
        $b = 1;
        $count = 0;
        while ($count < $n) {
            echo $a . " ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
            $count++;
        }
        echo "</p></div>";

        // Compute the factorial of n using do...while loop
        $factorial = 1;
        $i = $n;
        do {
            $factorial *= $i;
            $i--;
        } while ($i > 0);
        echo "<div class='panel'><h3>Factorial of $n:</h3><p>$n! = $factorial</p></div>";

        // Compute the summation of m using do...while loop
        $summation = 0;
        $i = 1;
        do {
            $summation += $i;
            $i++;
        } while ($i <= $m);
        echo "<div class='panel'><h3>Summation of numbers up to $m:</h3><p>Summation = $summation</p></div>";
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
