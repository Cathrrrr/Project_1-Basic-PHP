<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Use of Variables</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styling for the panels */
        .panel {
            border: 2px solid #d4b59e; /* Keep the existing border */
            border-radius: 12px; /* Rounded corners */
            background-color: #D2B48C; /* Light brown color */
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.2); /* Shadow for depth */
            padding: 15px; /* Padding inside the panel */
            margin: 10px 0; /* Margin between panels */
            text-align: left; /* Left-align text */
        }
    </style>
</head>
<body>
    <div class="content-box">
        <h2>The Use of Variables</h2>
        <?php
        // Whole numbers representing stock quantities
        $quantity1 = 10; 
        $quantity2 = 15; 
        $quantity3 = 8; 
        $quantity4 = 20; 
        $quantity5 = 5;

        // Floating-point numbers representing item prices
        $price1 = 9.99; 
        $price2 = 19.99; 
        $price3 = 14.50; 
        $price4 = 7.25; 
        $price5 = 12.75;

        // Strings representing item descriptions
        $description1 = "Red T-shirt"; 
        $description2 = "Blue Jeans"; 
        $description3 = "Black Sneakers"; 
        $description4 = "Green Jacket"; 
        $description5 = "White Cap";

        // Characters representing item codes
        $code1 = 'A'; 
        $code2 = 'B'; 
        $code3 = 'C'; 
        $code4 = 'D'; 
        $code5 = 'E';

        // Display quantities in one panel
        echo "<div class='panel'><h3>Whole Numbers</h3>";
        echo "<p>Item 1 Quantity: $quantity1</p>";
        echo "<p>Item 2 Quantity: $quantity2</p>";
        echo "<p>Item 3 Quantity: $quantity3</p>";
        echo "<p>Item 4 Quantity: $quantity4</p>";
        echo "<p>Item 5 Quantity: $quantity5</p>";
        echo "</div>";

        // Display prices in another panel
        echo "<div class='panel'><h3>Floating-point Numbers</h3>";
        echo "<p>Item 1 Price: $$price1</p>";
        echo "<p>Item 2 Price: $$price2</p>";
        echo "<p>Item 3 Price: $$price3</p>";
        echo "<p>Item 4 Price: $$price4</p>";
        echo "<p>Item 5 Price: $$price5</p>";
        echo "</div>";

        // Display descriptions in another panel
        echo "<div class='panel'><h3>Strings</h3>";
        echo "<p>Item 1 Description: '$description1'</p>";
        echo "<p>Item 2 Description: '$description2'</p>";
        echo "<p>Item 3 Description: '$description3'</p>";
        echo "<p>Item 4 Description: '$description4'</p>";
        echo "<p>Item 5 Description: '$description5'</p>";
        echo "</div>";

        // Display codes in another panel
        echo "<div class='panel'><h3>Characters</h3>";
        echo "<p>Item 1 Code: '$code1'</p>";
        echo "<p>Item 2 Code: '$code2'</p>";
        echo "<p>Item 3 Code: '$code3'</p>";
        echo "<p>Item 4 Code: '$code4'</p>";
        echo "<p>Item 5 Code: '$code5'</p>";
        echo "</div>";
        ?>
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
