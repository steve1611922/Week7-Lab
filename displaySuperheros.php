<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title>Superhero System</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Display all Superheros</h2>
    <p><a href="index.php">Return to home...</a></p>
</header>
<main>
<?php
    include ("db_connect.php");
    $sql_query= "SELECT * FROM superheros";
    $result = $db->query($sql_query);
    while ($row = $result->fetch_array())
        {
            $firstname=$row['firstname'];
            $lastname = $row['lastname'];
            $mainSuperpower = $row['mainsuperpower'];
            echo "<article>
                    <h3> {$firstname} {$lastname} </h3>
                    <p>This superheros main power is <strong> {$mainSuperpower}</strong></p>
                    </article>";
        }
        ?>
</main>
</body>
</html>