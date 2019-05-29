<?php session_start();
 include('blackjack.php');

 ?>




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

    <h1>Your score is:<?php echo $score; ?></h1>

    <h2>what do u want to do :</h2>

        <form id="gameform" action="game.php" method="post">
            <button type="submit" name="hitButton" id="hitButton">TOUCH ME</button>
            <button type="submit" name="standButton" id="standButton">STAND</button>
            <button type="submit" name="surrenderButton" id="surrenderButton">GIVE UP</button>
        </form>

    <h2>Your score is: <?php echo $player->score; ?></h2>
    <h2>The dealer score is: <?php echo $dealer->score; ?></h2>

<?php
/*if(isset($_POST['hitbutton']))
 {
    echo $player->Hit();
 }
 elseif {
     echo $player->Stand();
 }
 elseif {
     echo $player->Surrender();
 }

*/?>



</body>
</html>


