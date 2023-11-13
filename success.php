<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
</head>
<body>
    <h1>Form Submission Successful!</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $dob = $_POST["dob"];
            $gender = $_POST["gender"];

            echo "<p>First Name: $firstName</p>";
            echo "<p>Last Name: $lastName</p>";
            echo "<p>Date of Birth: $dob</p>";
            echo "<p>Gender: $gender</p>";
        }
    ?>
</body>
</html>
