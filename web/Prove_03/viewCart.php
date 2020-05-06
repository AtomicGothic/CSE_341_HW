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
        <title>Confirm Order</title>
        <script type="text/javascript" src="prove03_script.js"></script>
    </head>
    <body>
        <div class="standardText">
            <h2>Please Review Your Order</h2><br></br>
            <p class="main">Name: <?php echo $firstName . " " . $lastName;?></p><br>
            <p class="main">Shipping Address: <?php echo $address;?></p><br>
            <p class="main">Phone: <?php echo $phoneNumber;?></p><br>
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
            <form class="main" action="cancellationPage.php" method="POST" onsubmit="return submitConfirmation()">
                <input id="submit_form" type="submit" value="Confirm" name="confirm">
                <input id="cancel_form" type="submit" value="Cancel" name="cancel"><br><br /><br />
            </form>
        </div>
    <footer class="standardText">
        <p>Posted by: Adam Goff</p>
        <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a></p><br>
    </footer>
</body>
</html>

