<!DOCTYPE html>
<html>
<head>
    <title>My Index Page</title>
</head>
<body>
    <h1>Welcome to My Index Page</h1>

    <?php
    // PHP code section
    $message = "Hello, PHP!";
    $currentDate = date("Y-m-d");
    ?>

    <p><?php echo $message; ?></p>
    <p>Today's date is <?php echo $currentDate; ?></p>
</body>
</html>
