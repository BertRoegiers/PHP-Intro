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


<?php

    $motors = [
        ["brand" => "yamaha", "power" => "120pk"],
        ["brand" => "ducati", "power" => "170pk"],
        ["brand" => "motoguzzi", "power" => "140pk"]
    ];

    class Motorcycle
    {
        public $brand;
        public $power;

        public function __construct($moto)
        {
            $this->brand = $moto["brand"];
            $this->power = $moto["power"];
        }
    }


    $mymotor = new Motorcycle($motors[0]);
        echo ($mymotor->brand);

    $newmotor=["brand"=>"honda", "power"=>"100pk"];

    array_push($motors,$newmotor);
        print_r($motors);




    ?>










</body>
</html>