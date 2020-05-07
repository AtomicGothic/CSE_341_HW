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
        <div class="standardText">
        <h1 class="main">Checkout</h1>
        <form class="main" action="confirmationPage.php" method="POST" onsubmit="return submitConfirmation()">
            <h3>Please tell us where to ship.</h3>
            <div>Address: <input class="inputField" id="address" style="background-color:#f7f7ff; width:25%; text-align:right;" type="text" name="address" onchange="changeToUpperCase(this.id)"><br><br /></div>
            <h3>What is your best contact number?</h3>
            <div>Phone: <input class="inputField" id="phone" style="background-color:#f7f7ff; text-align:right;" type="text" name="phone" value="xxx-xxx-xxxx" oninput="validatePhoneNumber()"><br><br /></div>
            <h3>Please Review Your Order</h3>
            <input id="submit_form" type="submit" value="Confirm" name="confirm">
            <br></br>
        </form>
        </div>
        <div class="standardText">
            <form class="main" action="viewCart.php" method="POST" onsubmit="return toCart()">
            <div>First Name: <input class="inputField" id="first_name" style="background-color:#f7f7ff; text-align:right;" type="text" name="first_name" value="<?php echo $_SESSION['firstName'];?>" readonly><br><br /></div>
            <div>Last Name: <input class="inputField" id="last_name" style="background-color:#f7f7ff; text-align:right;" type="text" name="last_name" value="<?php echo $_SESSION['lastName'];?>" readonly><br><br /></div>
            <?php
                    if(!empty($_SESSION['order']))
                    {
                        $i = 0;
                        foreach ($_SESSION['order'] as $cart)
                        {
                            echo "<input id=\"item_" . $i . "\" type=\"checkbox\" name=\"item[]\" value=\"" . $cart . "\" onclick=\"checkboxReadOnly()\" checked>$" . $cart . "</td><br>";
                            $i = $i + 1;
                        }
                    }
            ?>
            <div>Total: $<input id="total" class="inputField" style="background-color:#f7f7ff; text-align:right;" type="text" name="total" value="<?php echo $_SESSION['totalPrice']?>" readonly><br><br /></div>
            <br></br>
                <input id="submit_form" type="submit" value="Back to Cart" name="backToCart">
            </form>
        </div>
            <footer class="standardText">
            <p>Posted by: Adam Goff</p>
            <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a></p><br>
            </footer>
</body>
</html>
