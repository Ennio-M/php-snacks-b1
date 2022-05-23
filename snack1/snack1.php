<?php
    $matches = [
        [
            'sc' => 'Olimpia Milano',
            'so' => 'Cantù',
            'pc' => 55,
            'po' => 60
        ],
        [
            'sc' => 'Dinamo Sassari',
            'so' => 'Brescia',
            'pc' => 98,
            'po' => 95
        ],
        [
            'sc' => 'Venezia',
            'so' => 'Derthona',
            'pc' => 60,
            'po' => 72
        ],
        [
            'sc' => 'VL Pesaro',
            'so' => 'Bologna',
            'pc' => 55,
            'po' => 75
        ],
        [
            'sc' => 'Trento',
            'so' => 'Reggiana',
            'pc' => 69,
            'po' => 77
        ],
        [
            'sc' => 'Varese',
            'so' => 'Fortitudo Bologna',
            'pc' => 103,
            'po' => 92
        ],
        [
            'sc' => 'Napoli',
            'so' => 'Dinamo Sassari',
            'pc' => 72,
            'po' => 78
        ],
        [
            'sc' => 'Olimpia Milano',
            'so' => 'Brindisi',
            'pc' => 92,
            'po' => 87
        ],
        [
            'sc' => 'Universo Treviso',
            'so' => 'Virtus Bologna',
            'pc' => 76,
            'po' => 113
        ],
        [
            'sc' => 'Brescia',
            'so' => 'Varese',
            'pc' => 102,
            'po' => 71
        ]
    ];
    //var_dump($matches);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <link rel="stylesheet" href="../style/common.css">
</head>
<body>
    <h1>Partite di basket</h1>
    <ul>
        <?php for($i = 0; $i < count($matches); $i++) {
            $k = $i + 1;
            echo '<li><strong>Partita '.$k.': </strong>'.$matches[$i]['sc'].' - '.$matches[$i]['so'].' | '.$matches[$i]['pc'].'-'.$matches[$i]['po'].'</li>';
        } ?>
    </ul>
</body>
</html>