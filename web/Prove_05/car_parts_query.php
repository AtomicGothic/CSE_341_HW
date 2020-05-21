<?php
    function search() {
        echo "<div class=\"standardText\"><form class=\"main\" method='post' action='scrip-results.php'>";
        echo "<input type='text' name='Search by car make, model, and year.'>";
        echo "<button type='submit'>Search</button>";
        echo "</form></div>";
    }

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
    <script type="text/javascript" src="prove05_script.js"></script>
</head>
<body onload="focusFirstElement()">
<div class="standardText">
        <p class="main" style="font-size: 20px;">Welcome to Goff's Brakes and Tires!</p>
</div>
    <?php search();?>
    <footer class="standardText">
        <p>Posted by: Adam Goff</p>
        <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a>.</p><br>
    </footer>
</body>
</html>
