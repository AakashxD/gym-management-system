<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>BMI Calculator - Result</title>
</head>
<body>
    <div id="calculator">
        <h2>BMI Calculator - Result</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $weight = $_POST["weight"];
            $height = $_POST["height"] / 100; // convert height to meters

            $bmi = $weight / ($height * $height);

            echo "<p>Your BMI is: " . number_format($bmi, 2) . "</p>";
        } else {
            echo "<p>No data submitted.</p>";
        }
        ?>

        <p><button style="color:red"><a href="index.html" style="color: white;">Health Cart</a></button></p>
    </div>
</body>
</html>
