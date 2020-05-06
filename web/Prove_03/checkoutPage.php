<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="prove03_styleSheet.css">
        <title>Checkout</title>
        <script type="text/javascript" src="prove03_script.js"></script>
    </head>
    <body>
        <h2>Please tell us where to ship and your contact number.</h2>
        <div>Address: <input class="inputField" id="address" style="background-color:#f7f7ff; width:25%; text-align:right;" type="text" name="address" onchange="changeToUpperCase(this.id)"><br><br /></div>
        <div>Phone: <input class="inputField" id="phone" style="background-color:#f7f7ff; text-align:right;" type="text" name="phone" value="xxx-xxx-xxxx" oninput="validatePhoneNumber()"><br><br /></div>
        <div class="standardText">
            <h3>Please Review Your Order</h3><br></br>
            <p class="main">Name: <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName'];?></p><br>
<?php
     echo  "<p class=\"main\">Your Cart: <br> ";

        if(!empty($merchandise))
        {
            foreach ($merchandise as $cart)
            {
                echo "$" . $cart . "<br>";
            }
        }
        echo "</p>";
?>
        <p class="main">Total: $<?php echo $total;?></p><br>
        <br></br>
        </div>
        <div class="standardText">
            <form class="main" action="confirmationPage.php" method="POST" onsubmit="return submitConfirmation()">
                <input id="submit_form" type="submit" value="Confirm" name="confirm">
            </form>
            <button id="returnToCart" type="button" onclick="window.location.href = '../viewCart.php';">Back to Cart</button><br><br /><br />
        </div>
            <footer class="standardText">
            <p>Posted by: Adam Goff</p>
            <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a></p><br>
            </footer>
</body>
</html>
