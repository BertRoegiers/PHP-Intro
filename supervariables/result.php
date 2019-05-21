<?php session_start(); ?>
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


<ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#POST">POST</a></li>
    <li><a data-toggle="tab" href="#GET">GET</a></li>
    <li><a data-toggle="tab" href="#supervariables">Supervariables</a></li>
</ul>




<div class="tab-content">
    <div id="POST" class="tab-pane fade in">
        <h3>Favourite Tv Shows</h3>
        <p><?php echo $_POST["favouriteTvShows"];
            ?></p>
        <h3>Favourite movies</h3>
        <p><?php echo $_REQUEST["favouriteMovies"]; ?>
        </p>
    </div>


    <div id="GET" class="tab-pane fade in">
        <h3>Favourite Country</h3>
        <p><?php echo $_GET["favCountry"];
            ?></p>
        <h3>Worst movie</h3>
        <p><?php echo $_REQUEST["badMovie"]; ?></p>
    </div>

    <div id="supervariables" class="tab-pane fade in">
        <h3>$_SESSION</h3>
            <p><?php print_r($_SESSION)?></p>

        <p>S_SESSION = A session is a way to store information (in variables) to be used across multiple pages. $_SESSION is available till user closes the page/application.</p>

        <h3>$_REQUEST</h3>
            <p>Does the same as $_POST or $_GET only looks at the method wich is used.</p>

        <h3>$_SERVER</h3>
            <p>$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations<br>
                <?php echo $_SERVER['PHP_SELF']; ?></p>

        <h3>$_COOKIE</h3>
            <p>A cookie is ussually used to identify a user<br>
            <?php echo $_COOKIE["Bert"]; ?></p>

        <h3>$_ENV</h3>
        <p>an array of information about the environment in wich php is running<br><br><br><?php var_dump($_ENV); ?></p>
    </div>


  <!--                          <!--the Table-->

    <table>
       <thead>
        <tr>
           <th>Favourite Tv-shows</th>
           <th>Favourite Movies</th>
           <th>Favourite CountryF</th>
           <th>Worst Movie</th>
        </tr>
       </thead>
            <tbody>
        <?php /*foreach ($favouriteTvShows as $favouriteTvShow): array_map('htmlentities', $favouriteTvShow); */?>
        <tr>
            <td>
                <?php /*echo implode('</td><td>', $favouriteTvShow); */?>
            </td>
        </tr>
        <?php /*foreach ($favouriteMovies as $favouriteMovie): array_map('htmlentities', $favouriteMovie ); */?>
            <td>
                <?php /*echo implode('<td></td>', $favouriteMovie); */?>
            </td>

        </tbody>

<?php /*endforeach; */?>

    </table>

-->







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>