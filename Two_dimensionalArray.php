<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-dimensional Array</title>
    <link rel="stylesheet" href="styles.css">
    <style>
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
            background-color: #f8f8f8;
        }
    </style>
</head>
<body>
    <div class="content-box">
        <h2>Two-dimensional Array</h2>
<div class="panel">
    <?php
    
    $N = 5; 
    $array = [];
    $overallSum = 0;
    $overallMin = PHP_INT_MAX;
    $overallMax = PHP_INT_MIN;

    for ($i = 0; $i < $N; $i++) {
        $array[$i] = [];
        for ($j = 0; $j < $N; $j++) {
            $value = rand(1, 100); 
            $array[$i][$j] = $value;
            $overallSum += $value;
            if ($value < $overallMin) {
                $overallMin = $value;
            }
            if ($value > $overallMax) {
                $overallMax = $value;
            }
        }
    }

  
    echo "<h3>Array (NxN)</h3>";
    echo "<table>";
    for ($i = 0; $i < $N; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $N; $j++) {
            echo "<td>{$array[$i][$j]}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<h3>Statistics</h3>";
    echo "<table>";
    echo "<tr><th>Row/Column</th><th>Sum</th><th>Average</th><th>Min</th><th>Max</th></tr>";

    for ($i = 0; $i < $N; $i++) {
        $rowSum = array_sum($array[$i]);
        $rowAvg = $rowSum / $N;
        $rowMin = min($array[$i]);
        $rowMax = max($array[$i]);
        echo "<tr><td>Row $i</td><td>$rowSum</td><td>$rowAvg</td><td>$rowMin</td><td>$rowMax</td></tr>";
    }

    for ($j = 0; $j < $N; $j++) {
        $colSum = 0;
        $colMin = PHP_INT_MAX;
        $colMax = PHP_INT_MIN;
        for ($i = 0; $i < $N; $i++) {
            $colSum += $array[$i][$j];
            if ($array[$i][$j] < $colMin) {
                $colMin = $array[$i][$j];
            }
            if ($array[$i][$j] > $colMax) {
                $colMax = $array[$i][$j];
            }
        }
        $colAvg = $colSum / $N;
        echo "<tr><td>Column $j</td><td>$colSum</td><td>$colAvg</td><td>$colMin</td><td>$colMax</td></tr>";
    }

    $mainDiagonalSum = 0;
    $mainDiagonalMin = PHP_INT_MAX;
    $mainDiagonalMax = PHP_INT_MIN;
    $antiDiagonalSum = 0;
    $antiDiagonalMin = PHP_INT_MAX;
    $antiDiagonalMax = PHP_INT_MIN;

    for ($i = 0; $i < $N; $i++) {
        $mainDiagonalSum += $array[$i][$i];
        $antiDiagonalSum += $array[$i][$N - $i - 1];

        if ($array[$i][$i] < $mainDiagonalMin) {
            $mainDiagonalMin = $array[$i][$i];
        }
        if ($array[$i][$i] > $mainDiagonalMax) {
            $mainDiagonalMax = $array[$i][$i];
        }
        if ($array[$i][$N - $i - 1] < $antiDiagonalMin) {
            $antiDiagonalMin = $array[$i][$N - $i - 1];
        }
        if ($array[$i][$N - $i - 1] > $antiDiagonalMax) {
            $antiDiagonalMax = $array[$i][$N - $i - 1];
        }
    }

    $mainDiagonalAvg = $mainDiagonalSum / $N;
    $antiDiagonalAvg = $antiDiagonalSum / $N;

    $overallAvg = $overallSum / ($N * $N);

    echo "<tr><td>Main Diagonal</td><td>$mainDiagonalSum</td><td>$mainDiagonalAvg</td><td>$mainDiagonalMin</td><td>$mainDiagonalMax</td></tr>";
    echo "<tr><td>Anti-Diagonal</td><td>$antiDiagonalSum</td><td>$antiDiagonalAvg</td><td>$antiDiagonalMin</td><td>$antiDiagonalMax</td></tr>";
    echo "<tr><td>Overall</td><td>$overallSum</td><td>$overallAvg</td><td>$overallMin</td><td>$overallMax</td></tr>";
    echo "</table>";
    ?>
        <div class="return-link">
            <a href="index.php">Return to Main Page</a>
        </div>
    </div> 
    <footer>
        <p>
            Created by Catherine A. Rotairo
            <span class="space">Date: October 12, 2024</span>
        </p>
    </footer>
</body>
</html>
