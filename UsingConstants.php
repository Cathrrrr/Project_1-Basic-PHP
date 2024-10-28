<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Constants</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f8f8f8;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<div class="content-box">
    <h2>Using Constants</h2>
    <div class="panel">
        <?php
        // Define constants
        define("PI", 3.14159);
        define("GRAVITY", 9.8);
        define("SPEED_OF_LIGHT", 299792458);
        define("AVOGADRO_NUMBER", 6.022e23);
        define("PLANCK_CONSTANT", 6.626e-34);
        define("BOLTZMANN_CONSTANT", 1.380649e-23);
        define("EARTH_RADIUS", 6371);
        define("GOLDEN_RATIO", 1.61803);
        define("EULER_NUMBER", 2.71828);
        define("ATMOSPHERIC_PRESSURE", 101.325);

        // Display constants in a table
        echo "<h3>List of Constants</h3>";
        echo "<table>";
        echo "<tr><th>Constant Name</th><th>Value</th></tr>";
        echo "<tr><td>1. PI</td><td>" . PI . "</td></tr>";
        echo "<tr><td>2. Gravity (m/s²)</td><td>" . GRAVITY . "</td></tr>";
        echo "<tr><td>3. Speed of Light (m/s)</td><td>" . SPEED_OF_LIGHT . "</td></tr>";
        echo "<tr><td>4. Avogadro's Number</td><td>" . AVOGADRO_NUMBER . "</td></tr>";
        echo "<tr><td>5. Planck's Constant (Js)</td><td>" . PLANCK_CONSTANT . "</td></tr>";
        echo "<tr><td>6. Boltzmann Constant (J/K)</td><td>" . BOLTZMANN_CONSTANT . "</td></tr>";
        echo "<tr><td>7. Earth Radius (km)</td><td>" . EARTH_RADIUS . "</td></tr>";
        echo "<tr><td>8. Golden Ratio</td><td>" . GOLDEN_RATIO . "</td></tr>";
        echo "<tr><td>9. Euler's Number</td><td>" . EULER_NUMBER . "</td></tr>";
        echo "<tr><td>10. Atmospheric Pressure (kPa)</td><td>" . ATMOSPHERIC_PRESSURE . "</td></tr>";
        echo "</table><h3>";

        // Example usage of constants
        echo "<h3>Examples of Using These Constants:</h3>";
        echo "<p>1. The circumference of a circle with radius 5 is: " . (2 * PI * 5) . " units.</p>";
        echo "<p>2. The gravitational force on a 10 kg object is: " . (GRAVITY * 10) . " N.</p>";
        echo "<p>3. The time it takes for light to travel 1,000,000 meters is: " . (1000000 / SPEED_OF_LIGHT) . " seconds.</p>";
        echo "<p>4. The number of molecules in 2 moles is: " . (2 * AVOGADRO_NUMBER) . " molecules.</p>";
        echo "<p>5. The energy of a photon with frequency 5 × 10^14 Hz is: " . (5e14 * PLANCK_CONSTANT) . " J.</p>";
        echo "<p>6. The thermal energy at 300 K is: " . (300 * BOLTZMANN_CONSTANT) . " J.</p>";
        echo "<p>7. The distance covered along the Earth's surface for an angle of 0.0175 radians is: " . (0.0175 * EARTH_RADIUS) . " km.</p>";
        echo "<p>8. The ratio of a length of 16.18 units to a width of 10 units follows the golden ratio: " . (16.18 / 10) . ".</p>";
        echo "<p>9. The value of e raised to the power of 2 is: " . (EULER_NUMBER ** 2) . ".</p>";echo "<p>10. The pressure at sea level is approximately: " . ATMOSPHERIC_PRESSURE . " kPa.</p>";
        ?>
    </div>
    <a href="index.php">Return to Main Page</a>
</div>

<footer>
    <p>
        Created by Catherine A. Rotairo
        <span class="space">Date: October 14, 2024</span>
    </p>
</footer>
</body>
</html>
