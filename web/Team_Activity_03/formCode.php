<?php
$name = htmlspecialchars($_POST["userName"]);
$email = htmlspecialchars($_POST["userEmail"]);
$major = htmlspecialchars($_POST["major"]);
$comments = htmlspecialchars($_POST["comments"]);
$places = htmlspecialchars($_POST["places"]);
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>Team Activity 03</title>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body id="mainBody">
    <p><b>Name: </b><span><?php echo $name ?></span></p>
    <p><b>Email: </b><span><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></span></p>
    <p><b>Major: </b><span><?php echo $major ?></span></p>
    <p><b>Comments: </b><span><?php echo $comments ?></span></p>
    <?php echo "<p><b>Places: </b><span>";
    echo $places;
            if(!empty($places))
            {
                foreach ($places as $visited)
                {
                    echo $visited . "<br>";
                }
            }
            echo "</span></p>";
    ?>
</body>
</html>