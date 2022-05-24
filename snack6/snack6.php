<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
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
    <title>Snack 6</title>
    <link rel="stylesheet" href="../style/common.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <h1>Snack 6</h1>
    <div class="container">
        <div class="box gray">
            <h4>Insegnanti</h4>
            <ul>
                <?php
                    for($i = 0; $i < count($db['teachers']); $i++) {
                        echo '<li>'.$db['teachers'][$i]['name'].' '.$db['teachers'][$i]['lastname'].'</li>';
                    }
                ?>
            </ul>
        </div>
        <div class="box green">
            <h4>PM</h4>
            <ul>
                <?php
                    for($i = 0; $i < count($db['pm']); $i++) {
                        echo '<li>'.$db['pm'][$i]['name'].' '.$db['pm'][$i]['lastname'].'</li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>