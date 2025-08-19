
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="Students.php" method="POST">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="text" name="middle_name" placeholder="Middle Name" required>
        <input type="number" name="age" placeholder="Age" required>
        <input type="date" name="created_at" placeholder="Created At" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>