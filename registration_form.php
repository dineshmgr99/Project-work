<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h2>Registration Form</h2>
        <form method="post" action="process_registration.php">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            
            <label for="student_id">Student ID:</label><br>
            <input type="text" id="student_id" name="student_id" required><br>
            
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" required><br>
            
            <label for="installment">Installment:</label><br>
            <input type="number" id="installment" name="installment" step="0.01" required><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

