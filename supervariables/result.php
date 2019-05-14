<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>


<div class="'tab">
    <button class="tablinks" onclick="wichVar(event, 'POST')">POST</button>
    <button class="tablinks" onclick="wichVar"(event, 'GET')">GET</button>

</div>







<p>
    <?php echo $_POST["favouriteTvShows"];
    ?>
</p>

<p>
    <?php echo $_POST["favouriteMovies"];
    ?>
</p>

<p>
    <?php echo $_GET["favCountry"];
    ?>
</p>

<p>
    <?php echo $_GET["badMovie"];
    ?>
</p>





















</body>

</html>