<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>


    <form id="form" action="nickname.php" method="get">
        <fieldset>
            <legend>Cool Nickname Generator</legend>
                <input type="text" name="Inputfield">
                <input type="submit">
        </fieldset>
    </form>


    <?php $inputfield = $_GET["Inputfield"];
       $reverse = strrev($inputfield);
       echo $reverse;

    ?>
    <?php $capitalize = strtoupper($inputfield);
        echo $capitalize;
     ?>

    <?php $normalize = strrev($reverse);
        echo $normalize;
     ?>

    <?php $a= "--";
        echo "{$a}$inputfield{$a}";
    ?>

    <?php $b= "x";
        echo "{$b}$inputfield";
     ?>



</body>
</html>