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
        <h1 class="main" style="font-size: 20px;">Welcome to Goff's Brakes and Tires!</h1>
        <p class="main">Please type in your car make:</p>
        <?php search();?>
</div>
    <footer class="standardText">
        <p>Posted by: Adam Goff</p>
        <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a>.</p><br>
    </footer>
</body>
</html>
