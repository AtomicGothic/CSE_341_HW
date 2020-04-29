<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home_styleSheet.css">
  <title>Adam Goff's Home Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body id="mainBody">
  <h1 id="firstH1">Adam Goff's Home Page</h1>
  <img src="me.jpg" alt="Adam Goff" width="240" height="300">
  <p>Name: <i>Adam Goff</i><br><br />Major: <i>Software Engineering</i><br><br />Home: <i>Atlanta, GA</i></p>
  <button onclick="window.location.href = '../assignments.html';">Adam's Assignments</button>
  <br>
  <?php
  echo "Welcome! Today's date is." . date("m/d/Y") . "<br>";
  ?>
  <br>
  <blockquote>
    "Hello! Welcome to my own little piece of the sky. A few things about me. I am a happy father of a little baby boy and I have a lovely wife. I love video games and I hope to be on a game dev team."<br>
    "I also enjoy table top games. If I have the right audience, I love to play empire building games that take the whole afternoon. Dungeons and Dragons was game of choice for me. I even was the dungeon master" <br>
    "Sadly, I haven't been able to play in years because of the time requirements and me not having time. I'm hoping to introduce it to my son when he gets older."
  </blockquote>
  <footer class="standardText">
        <p>Posted by: Adam Goff</p>
        <p>Contact information: <a href="mailto:quiryquark@byui.edu" target="_blank">quirkyquark@byui.edu</a></p><br>
  </footer>
</body>
</html>
