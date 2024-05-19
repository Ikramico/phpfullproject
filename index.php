<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Hi
    </h2>
    <?php
    require_once('./config.php');

    if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
    }

    // Execute a MySQL query
    $sql = "SELECT * FROM movies";
    $result = $mysqli->query($sql);

    if (!$result) {
    die("Error: " . $mysqli->error);
    }

    // Process the query results
    while ($row = $result->fetch_assoc()) {
    // Process each row of data
    echo " Name: " . $row["Name"] ." Genre".$row["Genre"]."<img src= '" .$row["Image"]."'><br>";
    }

    // Close the database connection
    $mysqli->close();
    ?>

</body>

</html>