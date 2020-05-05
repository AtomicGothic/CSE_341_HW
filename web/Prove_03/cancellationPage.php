<?php

    if (isset($_POST['cancel'])) {
      
    echo "<!DOCTYPE html>
    <html lang=\"en-us\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"prove03_styleSheet.css\">
        <title>Order Cancelled</title>
        <script type=\"text/javascript\" src=\"prove03_javaScript.js\"></script>
    </head>
    <body>
        <h1 class=\"standardText\" style=\"text-align: center;\"> Your order has been cancelled.</h1>
        <div class=\"standardText\">
        <footer class=\"standardText\">
            <p>Posted by: Adam Goff</p>
            <p>Contact information: <a href=\"mailto:quiryquark@byui.edu\" target=\"_blank\">quirkyquark@byui.edu</a>.</p><br>
        </footer>
        </div>
    </body>
    </html>";
    } 

    else {

        echo "<!DOCTYPE html>
        <html lang=\"en-us\">
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link rel=\"stylesheet\" href=\"assign11_styleSheet.css\">
            <title>Order Placed</title>
            <script type=\"text/javascript\" src=\"assign11_javaScript.js\"></script>
        </head>
        <body>
            <h1 class=\"standardText\" style=\"text-align: center;\"> Thank You!<br>Your order has been submitted!</h1>
            <footer class=\"standardText\">
                <p>Posted by: Adam Goff</p>
                <p>Contact information: <a href=\"mailto:quiryquark@byui.edu\" target=\"_blank\">quirkyquark@byui.edu</a>.</p><br>
            </footer>
        </body>
        </html>";
    }
    
?>