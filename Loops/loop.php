<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<?php

$array =  [
    ["tv-show" => "the big bang theory", "rating" => 9],
    ["tv-show" => "true blood", "rating" => 8],
    ["tv-show" => "blue mountain state", "rating" => 8],
    ["tv-show" => "that 70s show", "rating" => 7],
    ["tv-show" => "how i met your mother", "rating" => 6],
    ["tv-show" => "lucifer", "rating" => 5],
    ["tv-show" => "The simpsons", "rating" => 2],
    ["tv-show" => "family guy", "rating" => 0]

];
?>


<table>

    <tr>
        <th>Tv shows</th>
        <th>Rating</th>
    </tr>
        <?php foreach($array as $arr): ?>
        <?php $url = "https://www.google.com/search?q=" . str_replace(" ","-",$arr["tv-show"]); ?>
    <tr>
        <td><a href=<?php echo $url ?>><?php echo $arr["tv-show"]; ?>
            </a></td>
        <td>
            <?php for ($i=0; $i < $arr["rating"]; $i++): ?>
                <i class="fas fa-star"></i>
            <?php endfor; ?>
        </td>
    </tr>
        <?php endforeach; ?>
</table>










</body>
</html>