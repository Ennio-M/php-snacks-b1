<?php
    $nums = [];
    $i = 0;
    while($i < 15) {
        $x = rand(1, 100);
        if(!in_array($x, $nums)) {
            $nums[] = $x;
            $i++;
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
    <link rel="stylesheet" href="../style/common.css">
</head>
<body>
    <h1>Snack 4</h1>
    <h4>15 numeri casuali tra 1 e 100</h4>
    <ul>
        <?php
            for($k = 0; $k < count($nums); $k++) {
                echo '<li>'.$nums[$k].'</li>';
            }
        ?>
    </ul>
</body>
</html>