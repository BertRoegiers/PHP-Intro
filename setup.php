<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">.
    <title>PhP-intro</title>
</head>
<body>




    <form id="best" action ="result.php"  method="post">

        What are your favourite Tv-shows :
        <input type="text" name="favouriteTvShows"><br>

        What are your favourite movies :
        <input type="text" name="favouriteMovies"><br>

        <input type="submit">

    </form>


    <form id="worst" action="result.php" method="get">

        What is your favourite country :
        <input type="text" name="favCountry"><br>

        What is the worst movie u ever seen :
        <input type="text" name="badMovie"><br>

        <input type="submit">

    </form>








<?php
?>

</body>
</html>