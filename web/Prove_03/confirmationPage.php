<?php
    session_start();
    $address = $_POST['address'];
    $phoneNumber = $_POST['phone'];

    $_SESSION['userAddress'] = $address;
    $_SESSION['userPhone'] = $phoneNumber;

?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="prove03_styleSheet.css">
        <title>Confirmation Page</title>
        <script type="text/javascript" src="prove03_script.js"></script>
    </head>
    <body>
        <div class="standardText">
            <h2>Thank you for your order!</h2><br></br>
            <p class="main">Name: <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName'];?></p><br>
            <p class="main">Shipping Address: <?php echo $_SESSION['userAddress'];?></p><br>
            <p class="main">Phone: <?php echo $_SESSION['userPhone'];?></p><br>
<?php
      echo  "<p class=\"main\">Your Cart: <br> ";

    if(!empty($_SESSION['order']))
    {
        foreach ($_SESSION['order'] as $cart)
        {
            echo "$" . $cart . "<br>";
        }
    }
    echo "</p>";
?>

        <p class="main">Total: $<?php echo $_SESSION['totalPrice'];?></p><br>
        <br></br>
    <footer class="standardText">
        <p>Posted by: Adam Goff</p>
        <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a></p><br>
    </footer>
</body>
</html>