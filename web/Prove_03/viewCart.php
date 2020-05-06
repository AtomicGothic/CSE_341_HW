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
<?php
    if(!empty($_SESSION['order']))
    {
        foreach ($_SESSION['order'] as $cart)
        {
            echo "<p class=\"main\">->$" . $cart . "</p>";
        }
    }
?>

        <p class="main">Total: $<?php echo $_SESSION['totalPrice'];?></p><br>
        <br></br>
        </div>
        <div class="standardText">
            <form class="main" action="checkoutPage.php" method="POST" onsubmit="return toCheckout()">
                <input id="submit_form" type="submit" value="Confirm" name="confirm">
            </form>
        </div>
        <div class="standardText">
            <button class="main" id="returnToCart" type="button" onclick="window.location.href = '../Prove_03/orderCatalog.php';">Back to Cart</button><br><br /><br />
        </div>
    <footer class="standardText">
        <p>Posted by: Adam Goff</p>
        <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a></p><br>
    </footer>
</body>
</html>


