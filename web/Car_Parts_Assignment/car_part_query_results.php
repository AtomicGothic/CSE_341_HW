<?php
    session_start();

    require("dbConnect.php");
    $db = get_db();



    function validateInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function searchQuery($name, $db) {
        //$stmt = $db->prepare("SELECT * FROM carType, carBrakes, carType_carBrakes WHERE carType.carMake = :name AND carType.id = carType_carBrakes.carTypeid AND carBrakes.id = carType_carBrakes.carBrakesId");
        $stmt = $db->prepare("SELECT carBrakes.brakePad FROM carBrakes AS cb JOIN carTpe_carBrakes AS ctcb ON ctcb.carBrakesID = cb.id JOIN carType AS ct ON ct.id = ctcb.carTypeID WHERE ct.carMake = :name");
        //$stmt = $db->prepare("SELECT * FROM car_type, car_brakes WHERE ('car_type.car_make' LIKE \"%:name%\") AND car_type.id = car_brakes.car_type_id";
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
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
            echo "<div class='standardText'>";
            //$carParts = $db->query('SELECT car_brakes.brake_pad FROM car_type, car_brakes WHERE car_type.id = car_brakes.car_type_id')
            $i = 0;
            foreach ($carType as $row)
            {
                echo "<input class='main' id=\"item_" . $i . "\" type='checkbox' name='item[]'>" . $row['brakePad'];
                echo '<br/><br/>';
                $i++;
            }
            echo "</div>";
        ?>
        <button class="main" onclick="window.location.href = '../Car_Parts_Assignment/goff_car_parts.php';">Back to Search</button>
    </div>
<footer class="standardText">
    <p>Posted by: Adam Goff</p>
    <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a>.</p><br>
</footer>
</body>

</html>