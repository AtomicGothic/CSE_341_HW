<?php
    session_start();
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $merchandise = $_POST['item'];
    $total = $_POST['total'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phone'];

    $_SESSION['userAddress'] = $address;
    $_SESSION['userPhone'] = $phoneNumber;
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
    <title>Adam Goff's Assignment 11</title>
    <script type="text/javascript" src="prove03_script.js"></script>
</head>
<body onload="focusFirstElement()">
    <div class="standardText">
        <p class="main" style="font-size: 20px;">Welcome to Omega Games & Accessories</p>
        <form class="main" action="viewCart.php" method="POST" onreset="focusFirstElement()" onsubmit="return submitOrder()">
            <div>First Name: <input class="inputField" id="first_name" style="background-color:#f7f7ff; text-align:right;" type="text" name="first_name" onchange="changeToUpperCase(this.id)"><br><br /></div>
            <div>Last Name: <input class="inputField" id="last_name" style="background-color:#f7f7ff; text-align:right;" type="text" name="last_name" onchange="changeToUpperCase(this.id)"><br><br /></div>
            <div>
                <table class="inputField" style="width:100%; color:#181717 /*Eerie Black*/ ;font-family:arial; background-color:#a3a19f /*Quick Silver*/;">
                    <tr>
                        <th>Board Games</th>
                        <th></th>
                        <th>Accessories</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><input id="item_0" type="checkbox" name="item[]" value="19.99 RISK Classic" onclick="calculateTotal(this.id, this.value)">RISK Classic - $19.99</td>
                        <td><input id="item_1" type="checkbox" name="item[]" value="19.99 Monopoly Classic" onclick="calculateTotal(this.id, this.value)">Monopoly Classic - $19.99</td>
                        <td><input id="item_2" type="checkbox" name="item[]" value="9.99 Dice, Full Set (Red)" onclick="calculateTotal(this.id, this.value)">Dice, Full Set (Red) - $9.99</td>
                        <td><input id="item_3" type="checkbox" name="item[]" value="9.99 Card Sleeves, Standard (60 count)" onclick="calculateTotal(this.id, this.value)">Card Sleeves, Standard (60 count) - $9.99</td>
                        <td><input id="item_4" type="checkbox" name="item[]" value="9.99 Card Sleeves, Small (60 count)" onclick="calculateTotal(this.id, this.value)">Card Sleeves, Small (60 count) - $9.99</td>
                    </tr>
                    <tr>
                        <td><input id="item_5" type="checkbox" name="item[]" value="99.99 Twilight Imperium 4th Edition" onclick="calculateTotal(this.id, this.value)">Twilight Imperium 4th Edition - $99.99</td>
                        <td><input id="item_6" type="checkbox" name="item[]" value="24.99 Pandemic!" onclick="calculateTotal(this.id, this.value)">Pandemic! - $24.99</td>
                        <td><input id="item_7" type="checkbox" name="item[]" value="9.99 Dice, Full Set (Blue)" onclick="calculateTotal(this.id, this.value)">Dice, Full Set (Blue) - $9.99</td>
                        <td><input id="item_8" type="checkbox" name="item[]" value="24.99 Board Game Bag, Shoulder" onclick="calculateTotal(this.id, this.value)">Board Game Bag, Shoulder - $24.99</td>
                        <td><input id="item_9" type="checkbox" name="item[]" value="24.99 Board Game Bag, Backpack" onclick="calculateTotal(this.id, this.value)">Board Game Bag, Backpack - $24.99</td>
                    </tr>
                    <tr>
                        <td><input id="item_10" type="checkbox" name="item[]" value="24.99 Settlers of Catan" onclick="calculateTotal(this.id, this.value)">Settlers of Catan - $24.99</td>
                        <td><input id="item_11" type="checkbox" name="item[]" value="19.99 Chess/Checkers" onclick="calculateTotal(this.id, this.value)">Chess/Checkers - $19.99</td>
                        <td><input id="item_12" type="checkbox" name="item[]" value="9.99 Dice, Full Set (Green)" onclick="calculateTotal(this.id, this.value)">Dice, Full Set (Green) - $9.99</td>
                        <td><input id="item_13" type="checkbox" name="item[]" value="4.99 Deck Box (Red)" onclick="calculateTotal(this.id, this.value)">Deck Box (Red) - $4.99</td>
                        <td><input id="item_14" type="checkbox" name="item[]" value="4.99 Deck Box (Blue)" onclick="calculateTotal(this.id, this.value)">Deck Box (Blue) - $4.99</td>
                    </tr>
                    <tr>
                        <td><input id="item_15" type="checkbox" name="item[]" value="19.99 Citadels" onclick="calculateTotal(this.id, this.value)">Citadels - $19.99</td>
                        <td><input id="item_16" type="checkbox" name="item[]" value="39.99 Small World" onclick="calculateTotal(this.id, this.value)">Small World - $39.99</td>
                        <td><input id="item_17" type="checkbox" name="item[]" value="9.99 Dice, Full Set (Black)" onclick="calculateTotal(this.id, this.value)">Dice, Full Set (Black) - $9.99</td>
                        <td><input id="item_18" type="checkbox" name="item[]" value="4.99 Deck Box (Black)" onclick="calculateTotal(this.id, this.value)">Deck Box (Black) - $4.99</td>
                        <td><input id="item_19" type="checkbox" name="item[]" value="4.99 Deck Box (White)" onclick="calculateTotal(this.id, this.value)">Deck Box (White) - $4.99</td>
                    </tr>
                </table>
                <br>
            </div>
            <div>Total: $<input id="total" class="inputField" style="background-color:#f7f7ff; text-align:right;" type="text" name="total" value="0.00" readonly><br><br /></div>
            <input id="submit_form" type="submit" value="View Cart" name="submit">
            <input id="reset_form" type="reset" value="Clear Cart" name="reset"><br><br /><br />
        </form><br><br />
    </div>
    <footer class="standardText">
        <p>Posted by: Adam Goff</p>
        <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a>.</p><br>
    </footer>
</body>
</html>
