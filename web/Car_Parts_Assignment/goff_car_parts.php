<?php
    function search() {
        echo "<div class=\"standardText\"><form class=\"main\" method='POST' action='car_part_query_results.php'>";
        echo "<input type='text' name='car_type'>";
        echo "<button type='submit'>Search</button>";
        echo "</form></div>";
    }

    require("dbConnect.php");
    $db = get_db();

?>
<?php
    session_start();
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
<body onload="focusFirstElement()">
<div class="standardText">
        <h1 class="main" style="font-size: 20px;">Welcome to Goff's Brakes, Admin!</h1>
        <p class="main">This is where you can search, add, and modify our inventory.</p><br>
        <p class="main">Please type in your car make to search (first letter must be capitalized):</p>
        <div class="standardText">
            <form class="main" method='POST' action='car_part_query_results.php'>
                <input type='text' name='car_type'>
                <button type='submit'>Search</button>
            </form>
        </div>
        <p class="main">Fill this form to add brakes to our inventory:</p>
            <div class="standardText">
                <form class="main" method='POST' action="add_parts.php">
                    <input type="text" id="txtMake" name="txtMake">
                    <label for="txtMake">Make</label><br>

                    <input type="text" id="txtModel" name="txtModel">
                    <label for="txtModel">Model</label><br>

                    <input type="text" id="txtYear" name="txtYear">
                    <label for="txtYear">Year</label><br>
                </form>
            </div>
</div>
    <footer class="standardText">
        <p>Posted by: Adam Goff</p>
        <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a>.</p><br>
    </footer>
</body>
</html>
