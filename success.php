<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page - Emmerge Assessment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-screen h-screen flex items-center justify-center">
        <div class="">
            <h1 class="font-bold text-2xl mb-8">Form Submission Successful!</h1>
            <p class="mb-2">The following data was submitted:</p>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $firstName = $_POST["firstName"];
                    $lastName = $_POST["lastName"];
                    $dob = $_POST["dob"];
                    $gender = $_POST["gender"];

                    echo "<p class='mb-2'>First Name: $firstName</p>";
                    echo "<p class='mb-2'>Last Name: $lastName</p>";
                    echo "<p class='mb-2'>Date of Birth: $dob</p>";
                    echo "<p class='mb-2'>Gender: $gender</p>";
                }
            ?>
        </div>
    </div>
</body>
</html>
