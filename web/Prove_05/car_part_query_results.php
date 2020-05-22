<?php
    session_start();

    try
    {
      $dbUrl = getenv('DATABASE_URL');

      $dbOpts = parse_url($dbUrl);

      $dbHost = $dbOpts["host"];
      $dbPort = $dbOpts["port"];
      $dbUser = $dbOpts["user"];
      $dbPassword = $dbOpts["pass"];
      $dbName = ltrim($dbOpts["path"],'/');

      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch (PDOException $ex)
        {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }



    function validateInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function searchQuery($name, $db) {
        // $db=dbConnection();
        $stmt = $db->prepare("SELECT * FROM car_type, car_brakes WHERE carType = $name AND car_type.id = car_brakes.car_type_id");
        //$name= '$name';
        //$stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        $carType = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $carType;
    }

    // If the page loads as a POST request, look for this variable, and if it is set
    if(isset($_POST['carType'])) {
        // Validate & sanitize the input
        $searchText = validateInput($_POST['carType']);
        // Now run the query to find the text in the database, and then save the results as a variable
        $carType = searchQuery($searchText, $db);
        // Change the method name
        print_r($carType);
    }

?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="prove05_styleSheet.css">
    <title>Adam Goff's Assignment 5</title>
    <script src="prove05_script.js"></script>
</head>
<body>
    <div class="standardText">
        <h2 class="main">Car Parts Available</h2>
        <?php
            //$carParts = $db->query('SELECT car_brakes.brake_pad FROM car_type, car_brakes WHERE car_type.id = car_brakes.car_type_id')
            foreach ($carType as $row)
            {
                echo "<p>Front Brake: " . $row['brake_pad'] . '</p>';
                echo '<br/><br/>';
            }
        ?>
    </div>
<footer class="standardText">
    <p>Posted by: Adam Goff</p>
    <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a>.</p><br>
</footer>
</body>

</html>