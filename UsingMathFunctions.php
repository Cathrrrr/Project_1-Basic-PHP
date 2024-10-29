<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Math Functions</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
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
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.2);
            padding: 15px;
            margin: 10px 0;
            text-align: left;
        }
        h2 {
            color: #4b2e1a;
        }
    </style>
</head>
<body>
    <div class="content-box">
        <h2>Using Math Functions</h2>
        <div class="panel">
            <?php
                // Declare five floating point numbers
                $float1 = 5.7;
                $float2 = 3.14;
                $float3 = -8.23;
                $float4 = 2.71;
                $float5 = 9.99;

                // Declare five whole numbers
                $int1 = 7;
                $int2 = 15;
                $int3 = -4;
                $int4 = 0;
                $int5 = 20;

                // Display declared numbers
                echo "<h3>Declared Numbers</h3>";
                echo "<p>Floating-point numbers: $float1, $float2, $float3, $float4, $float5</p>";
                echo "<p>Whole numbers: $int1, $int2, $int3, $int4, $int5</p>";

                // Demonstrate 15 math functions and display results
                echo "<h3>Results of Math Functions</h3>";
                echo "<p>1. Absolute value of $float3: " . abs($float3) . "</p>";
                echo "<p>2. Ceiling of $float1: " . ceil($float1) . "</p>";
                echo "<p>3. Floor of $float2: " . floor($float2) . "</p>";
                echo "<p>4. Round $float4 to the nearest integer: " . round($float4) . "</p>";
                echo "<p>5. Square root of $float5: " . sqrt($float5) . "</p>";
                echo "<p>6. Power of $int1 raised to 2: " . pow($int1, 2) . "</p>";
                echo "<p>7. Maximum value between $int2 and $int5: " . max($int2, $int5) . "</p>";
                echo "<p>8. Minimum value between $int3 and $int4: " . min($int3, $int4) . "</p>";
                echo "<p>9. Sine of $float2: " . sin($float2) . "</p>";
                echo "<p>10. Cosine of $float2: " . cos($float2) . "</p>";
                echo "<p>11. Tangent of $float2: " . tan($float2) . "</p>";
                echo "<p>12. Random number: " . rand() . "</p>";
                echo "<p>13. Random number between 1 and 100: " . rand(1, 100) . "</p>";
                echo "<p>14. Natural logarithm of $float4: " . log($float4) . "</p>";
                echo "<p>15. Base-10 logarithm of $float5: " . log10($float5) . "</p>";
                echo "<p>Exponent of $float1 (e^5.7): " . exp($float1) . "</p>";
                echo "<p>Hypotenuse of 3 and 4: " . hypot(3, 4) . "</p>";
            ?>
        </div>

        <a href="index.php">Return to Main Page</a>
    </div>
    <footer>
        <p>
            Created by Catherine A. Rotairo
            <span class="space">Date: October 13, 2024</span>
        </p>
    </footer>
</body>
</html>
