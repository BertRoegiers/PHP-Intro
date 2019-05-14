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

<?php   if (count($array) > 0): ?>
    <table id="table">
        <thead>
        <thead>
        <th><?php echo implode('</th><th>', array_keys(current($array))); ?>
        </th>
        </thead>
        <tbody>
        <?php foreach ($array as $row): array_map('htmlentities', $row); ?>
            <tr>
                <td><?php echo implode('</td><td>', $row); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>





</body>
</html>











