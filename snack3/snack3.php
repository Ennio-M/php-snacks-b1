<?php
    $posts = [
        '10/01/2022' => [
            [
                'title' => 'Primo post',
                'author' => 'Ennio Marrese',
                'text' => 'Testo primo post'
            ],
            [
                'title' => 'Secondo post',
                'author' => 'Andrea Cagnazzo',
                'text' => 'Testo secondo post'
            ],
        ],
        '05/04/2022' => [
            [
                'title' => 'Terzo post',
                'author' => 'Mattia Liberatore',
                'text' => 'Testo terzo post'
            ]
        ],
        '19/05/2019' => [
            [
                'title' => 'Quarto post',
                'author' => 'Domenico Giola',
                'text' => 'Testo quarto post'
            ],
            [
                'title' => 'Quinto post',
                'author' => 'Nicola Frecina',
                'text' => 'Testo quinto post'
            ],
            [
                'title' => 'Sesto post',
                'author' => 'Antonio Fracchiolla',
                'text' => 'Testo sesto post'
            ]
        ],
        '23/05/2022' => [
            [
                'title' => 'Settimo post',
                'author' => 'Matteo Di Leo',
                'text' => 'Testo settimo post'
            ],
            [
                'title' => 'Ottavo post',
                'author' => 'Giuseppe Liberatore',
                'text' => 'Testo ottavo post'
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
    <title>Snack 3</title>
    <script src="https://kit.fontawesome.com/1e3be9b4ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/common.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <h1 class="main-title">Snack 3</h1>
    <?php
        $dates = array_keys($posts);
        for($i = 0; $i < count($posts); $i++) {
            echo '<ul><strong>Data: </strong>'.$dates[$i].'</ul>';
            for($k = 0; $k < count($posts[$dates[$i]]); $k++) {
                echo '<li>Titolo: '.$posts[$dates[$i]][$k]['title'].'</li>';
                echo '<li>Autore: '.$posts[$dates[$i]][$k]['author'].'</li>';
                echo '<li>Testo: '.$posts[$dates[$i]][$k]['text'].'</li> <br>';
            }
        }
    ?>
</body>
</html>