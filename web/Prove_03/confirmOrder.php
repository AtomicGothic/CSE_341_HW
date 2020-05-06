<?php

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phone'];
    $merchandise = $_POST['item'];
    $total = $_POST['total'];


    echo "<!DOCTYPE html>
    <html lang=\"en-us\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"prove03_styleSheet.css\">
        <title>Confirm Order</title>
        <script type=\"text/javascript\" src=\"prove03_javaScript.js\"></script>
    </head>
    <body>
        <div class=\"standardText\">
            <h2>Please Review Your Order</h2><br></br>
            <p class=\"main\">Name: " . $firstName . " " . $lastName . "</p><br>
            <p class=\"main\">Shipping Address: " . $address . "</p><br>
            <p class=\"main\">Phone: " . $phoneNumber . "</p><br>";

      echo  "<p class=\"main\">Your Cart: <br> ";

    if(!empty($merchandise))
    {
        foreach ($merchandise as $cart)
        {
            echo "$" . $cart . "<br>";
        }
    }

      echo  "<p class=\"main\">Total: $" . $total . "</p><br>";


      echo "</p><br></br>
        </div>
        <div class=\"standardText\">
            <form class=\"main\" action=\"prove03_a.php\" method=\"POST\" onsubmit=\"return submitConfirmation()\">
                <input id=\"submit_form\" type=\"submit\" value=\"Confirm\" name=\"confirm\">
                <input id=\"cancel_form\" type=\"submit\" value=\"Cancel\" name=\"cancel\"><br><br /><br />
            </form>
         </div>
        <footer class=\"standardText\">
        <p>Posted by: Adam Goff</p>
        <p>Contact information: <a href=\"mailto:quiryquark@byui.edu\" target=\"_blank\">quirkyquark@byui.edu</a>.</p><br>
    </footer>
    </body>
    </html>";


?>