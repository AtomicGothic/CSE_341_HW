<?php
$name = htmlspecialchars($_POST["userName"]);
$email = htmlspecialchars($_POST["userEmail"]);
$major = htmlspecialchars($_POST["major"]);
$comments = htmlspecialchars($_POST["comments"]);
$places = $_POST["places"];
​$information = array(
    "North America is pretty cool.  Lots of people live there" => "0",
    "South America is below North America.  It is very beautiful and has a very long and interesting history" => "1",
    "Europe is amazing.  It unfortunately has been the site of 2 World Wars.  There are many historical sites worth visiting though." => "2",
    "Asia is a very beautiful place.  There are many types of activities for all, between the nightlife, beaches, and quiet places to meditate." => "3",
    "Australia: Kangaroos, koalas, and the Great Barrier Reef. So many different places to visit." => "4",
    "Since you have visited Africa, you know that it is the 2nd largest continent in both land and in population.  There are only a few parts of the continent that you'd consider cold." => "5",
    "Antarctica.  Guess what? Its cold.  And penguins.  Lots of ice.  But it has penguins!" => "6",
);
print_r($_POST);
?>
