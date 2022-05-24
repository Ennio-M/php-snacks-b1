<?php
    $students = [
        [
            "name" => "Ennio",
            "lastname" => "Marrese",
            "grades" => [
                8,
                9,
                8,
                7,
                10,
                9
            ]
        ],
        [
            "name" => "Andrea",
            "lastname" => "Cagnazzo",
            "grades" => [
                4,
                6,
                5,
                4,
                3,
                5
            ]
        ],
        [
            "name" => "Mattia",
            "lastname" => "Liberatore",
            "grades" => [
                4,
                5,
                5,
                6,
                7,
                6
            ]
        ],
        [
            "name" => "Domenico",
            "lastname" => "Giola",
            "grades" => [
                5,
                4,
                2,
                6,
                6,
                7
            ]
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
    <link rel="stylesheet" href="../style/common.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <h1>Snack 7</h1>
    <?php
        for($i = 0; $i < count($students); $i++) {
            echo '<ul><li>Nome: '.$students[$i]['name'].'</li>';
            echo '<li>Cognome: '.$students[$i]['lastname'].'</li>';
            echo '<li>Media: '.(array_sum($students[$i]['grades'])/count($students[$i]['grades'])).'</li></ul>';
        }
    ?>
</body>
</html>