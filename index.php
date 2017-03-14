<!DOCTYPE html>
<html lang="en">
<meta charset="UFT-8">
<title>Superhero System</title>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Superhero Home Page</h2>
</header>
<p>What would you like to do?</p>
<ul>
    <li><a href="insertSuperhero.php">Insert a Superhero</a></li>
    <li><a href="displaySuperheros.php">Display all Superheros</a></li>
    <li><a href="battle.php">Insert a Battle</a></li>
    <li><a href="displaybattles.php">Display all Battles</a></li>
    <ul>
        <?php
        include ("db_connect.php");
        $sql_query= "select * from superheros";
        $result = $db->query($sql_query);
        $id= $row['superheroID'];
        while ($row = $result->fetch_array())
        {
            $firstname=$row['firstname'];
            $lastname = $row['lastname'];
            echo "<li <a href='displaybattles.php?id={$id}'>Battles for {$firstname} {$lastname}</a></li>";
        }
        ?>
    </ul>
</ul>
</body>
</html>