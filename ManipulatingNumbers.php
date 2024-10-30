<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulating Numbers</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      
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
            <h2>Manipulating Numbers</h2>
            
        <?php
            $quiz1 = 1.75;
            $quiz2 = 1.80;
            $quiz3 = 1.70;
            $project1 = 1.65;
            $midterm_exam = 1.79;

            $quiz4 = 1.85;
            $quiz5 = 1.80;
            $project2 = 1.15;
            $final_exam = 1.50;

            // Midterm calculations
            $avg_quizzes_midterm = ($quiz1 + $quiz2 + $quiz3) / 3;
            $avg_project_midterm = $project1;
            $midterm_grade = ($avg_quizzes_midterm * 0.30) + ($avg_project_midterm * 0.20) + ($midterm_exam * 0.50);

            // Tentative final calculations
            $avg_quizzes_final = ($quiz4 + $quiz5) / 2;
            $avg_project_final = $project2;
            $final_grade = ($avg_quizzes_final * 0.30) + ($avg_project_final * 0.20) + ($final_exam * 0.50);

            // Final grade calculation
            $final_final_grade = ($midterm_grade + $final_grade) / 2;

            // Results
            echo "<div class='panel'>";
            echo "<h4>Midterm Grade Calculation</h4>";
            echo "<p>Average Quiz Grade: " . number_format($avg_quizzes_midterm, 2) . "</p>";
            echo "<p>Average Project Grade: " . number_format($avg_project_midterm, 2) . "</p>";
            echo "<p>Exam Grade: " . number_format($midterm_exam, 2) . "</p>";
            echo "<p>Computed Midterm Grade: " . number_format($midterm_grade, 2) . "</p>";
            echo "</div>";

            echo "<div class='panel'>";
            echo "<h4>Tentative Final Grade Calculation</h4>";
            echo "<p>Average Quiz Grade: " . number_format($avg_quizzes_final, 2) . "</p>";
            echo "<p>Average Project Grade: " . number_format($avg_project_final, 2) . "</p>";
            echo "<p>Exam Grade: " . number_format($final_exam, 2) . "</p>";
            echo "<p>Computed Tentative Final Grade: " . number_format($final_grade, 2) . "</p>";
            echo "</div>";

            echo "<div class='panel'>";
            echo "<h4>Overall Final-Final Grade</h4>";
            echo "<p>Final-Final Grade: " . number_format($final_final_grade, 2) . "</p>";
            echo "</div>";
        ?>

<div class="return-link">
            <a href="index.php">Return to Main Page</a>
        </div>
    </div>
    
    <footer>
        <p>Created by Catherine A. Rotairo <span class="space">Date: October 13, 2024</span></p>
    </footer>
</body>
</html>