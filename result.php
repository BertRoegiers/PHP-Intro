<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 <!--   <ul class="nav nav-variableValue active"
        <li>POST</li>
        <li>GET</li>
    </ul>
-->

<p>
<?php
    echo $_POST["favouriteTvShows"];
?>
</p>


<p>
<?php
    echo $_POST["favouriteMovies"];
?>
</p>


<p>
<?php
    echo $_GET["favCountry"];
?>
</p>


<p>
<?php
    echo $_GET["badMovie"];
?>
</p>


</body>
</html>