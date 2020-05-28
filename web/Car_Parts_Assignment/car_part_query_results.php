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
        try{
            //$stmt = $db->prepare("SELECT * FROM carType, carBrakes, carType_carBrakes WHERE carType.carMake = :name AND carType.id = carType_carBrakes.carTypeid AND carBrakes.id = carType_carBrakes.carBrakesId");
            $stmt = $db->prepare("SELECT cb.brakePad FROM carBrakes AS cb JOIN carType_carBrakes AS ctcb ON ctcb.carBrakesID = cb.id JOIN carType AS ct ON ct.id = ctcb.carTypeID WHERE ct.carMake = :name");
            //$stmt = $db->prepare("SELECT * FROM car_type, car_brakes WHERE ('car_type.car_make' LIKE \"%:name%\") AND car_type.id = car_brakes.car_type_id";
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->execute();
            $carType = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (Exception $ex) {
            echo "ERROR: $ex";
        }
        return $carType;
    }

    // If the page loads as a POST request, look for this variable, and if it is set
    if(isset($_POST['carType'])) {
        // Validate & sanitize the input
        $searchText = validateInput($_POST['carType']);
        // Now run the query to find the text in the database, and then save the results as a variable
        $carType = searchQuery($searchText, $db);
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
            echo "<div class='standardText'>";
            $i = 0;
            try {
                foreach ($carType as $row)
                {
                    echo "<input class='main' id=\"item_" . $i . "\" type='checkbox' name='item[]'>" . $row['brakepad'];
                    echo '<br/><br/>';
                    $i++;
                }
            } catch (Exception $ex) {
                echo "ERROR: $ex";
            }
            echo "</div>";
            ?>
    <div class="standardText">
        <form class="main" action="remove_parts.php" method="POST">
            <input id="form_delete" type="submit" value="Delete" name="delete">
        </form>
    </div>
    <div class="standardText">
        <form class="main" action="update_parts.php" method="POST">
            <input type="text" id="txtNew" name="txtNew">
            <label for="txtNew">Rename Here</label><br><br>
            <input id="form_update" type="submit" value="Update" name="update">
        </form>
    </div>
        <button class="main" onclick="window.location.href = '../Car_Parts_Assignment/goff_car_parts.php';">Back to Search</button>
    </div>
<footer class="standardText">
    <p>Posted by: Adam Goff</p>
    <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a>.</p><br>
</footer>
</body>

</html>