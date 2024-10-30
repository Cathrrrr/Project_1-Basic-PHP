<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-dimensional Array</title>
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
        <h2>Single-dimensional Array</h2>
    
        <div class="panel">
            <?php
            $people = [
                ["name" => "Krisha", "age" => 20, "sex" => "Female", "nationality" => "American"],
                ["name" => "Calvin", "age" => 24, "sex" => "Male", "nationality" => "British"],
                ["name" => "Fine", "age" => 23, "sex" => "Female", "nationality" => "Australian"],
                ["name" => "James", "age" => 21, "sex" => "Male", "nationality" => "American"],
                ["name" => "Charilyn", "age" => 22, "sex" => "Female", "nationality" => "Irish"],
                ["name" => "Don", "age" => 20, "sex" => "Male", "nationality" => "Scottish"],
                ["name" => "Menzi", "age" => 24, "sex" => "Female", "nationality" => "Canadian"],
                ["name" => "Bert", "age" => 28, "sex" => "Male", "nationality" => "Australian"],
                ["name" => "Sheina", "age" => 20, "sex" => "Female", "nationality" => "British"],
                ["name" => "Stephen", "age" => 26, "sex" => "Male", "nationality" => "Canadian"]
            ];
            function sortAndDisplay($array) {
                // Sort array by name
                usort($array, function ($a, $b) {
                    return strcmp($a["name"], $b["name"]);
                });

                // Display the sorted array
                echo "<h3>Sorted List:</h3>";
                echo "<table><tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
                foreach ($array as $person) {
                    echo "<tr>
                            <td>{$person['name']}</td>
                            <td>{$person['age']}</td>
                            <td>{$person['sex']}</td>
                            <td>{$person['nationality']}</td>
                        </tr>";
                }
                echo "</table>";
            }

            // Display unsorted array
            echo "<h3>Unsorted List:</h3>";
            echo "<table><tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
            foreach ($people as $person) {
                echo "<tr>
                        <td>{$person['name']}</td>
                        <td>{$person['age']}</td>
                        <td>{$person['sex']}</td>
                        <td>{$person['nationality']}</td>
                    </tr>";
            }
            echo "</table>";
            sortAndDisplay($people);
            ?>
         <div class="return-link" >
            <a href="index.php">Return to Main Page</a>
        </div>

    </div>
    <footer>
        <p>
            Created by Catherine A. Rotairo
            <span class="space">Date: October 17, 2024</span>
        </p>
    </footer>
</body>
</html>
