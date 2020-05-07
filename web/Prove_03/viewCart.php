<?php
    session_start();
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $merchandise = $_POST['item'];
    $total = $_POST['total'];

    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['order'] = $merchandise;
    $_SESSION['totalPrice'] = $total;
?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="prove03_styleSheet.css">
        <title>Your Cart</title>
        <script type="text/javascript" src="prove03_script.js"></script>
    </head>
    <body>
        <div class="standardText">
            <h2 class="main">Your Shopping Cart</h2><br></br>
            <form class="main" action="viewCart.php" method="POST" onsubmit="return refreshCart()">
            <div>First Name: <input class="inputField" id="first_name" style="background-color:#f7f7ff; text-align:right;" type="text" name="first_name" value="<?php echo $_SESSION['firstName'];?>" readonly><br><br /></div>
            <div>Last Name: <input class="inputField" id="last_name" style="background-color:#f7f7ff; text-align:right;" type="text" name="last_name" value="<?php echo $_SESSION['lastName'];?>" readonly><br><br /></div>
                <?php
                    if(!empty($_SESSION['order']))
                    {
                        $i = 0;
                        foreach ($_SESSION['order'] as $cart)
                        {
                            echo "<input id=\"item_" . $i . "\" type=\"checkbox\" name=\"item[]\" value=\"" . $cart . "\" onclick=\"calculateTotal(this.id, this.value)\" checked>$" . $cart . "</td><br>";
                            $i = $i + 1;
                        }
                    }
                ?>
                <div>Total: $<input id="total" class="inputField" style="background-color:#f7f7ff; text-align:right;" type="text" name="total" value="<?php echo $_SESSION['totalPrice']?>" readonly><br><br /></div>
                <p class="main">Un-check the boxes of items you want to delete.</p>
                <input id="submit_form" type="submit" value="Delete" name="deleteItem">
            </form>
        <br></br>
        </div>
        <div class="standardText">
            <form class="main" action="checkoutPage.php" method="POST" onsubmit="return toCheckout()">
                <input id="submit_form" type="submit" value="Confirm" name="confirm">
            </form>
        </div>
        <div class="standardText">
            <form class="main" action="orderCatalog.php" method="POST" onsubmit="return toOrderCatalog()">
                <input id="submit_form" type="submit" value="Back to Catalog" name="toCatalog">
            </form>
        </div>
    <footer class="standardText">
        <p>Posted by: Adam Goff</p>
        <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a></p><br>
    </footer>
</body>
</html>


