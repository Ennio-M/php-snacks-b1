<?php
    $par = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, eligendi ratione? Ab cum fugit, quis voluptates qui accusantium temporibus tempore delectus repellendus nihil. Quidem error magnam laboriosam commodi itaque eius quisquam ratione facilis sit reiciendis ea amet expedita aliquam asperiores vel fuga tenetur nesciunt, minima magni unde exercitationem vero placeat. Quasi modi ullam doloribus quos accusantium temporibus aut sint suscipit aspernatur, ea delectus, est laborum sapiente non? Veritatis quia dolor tempora eaque vitae cupiditate fuga mollitia impedit sint. Non consequatur suscipit quibusdam laborum ex dolorem, dicta ab ullam sed quasi provident maiores animi placeat fugit cumque magnam dolorum eius quas? Delectus dolores architecto perspiciatis sed dolorum doloremque officia debitis, consectetur pariatur, odio aliquam aliquid saepe. Minus corporis molestiae aliquid voluptatem sequi! Corporis animi quidem aperiam, quos eos dignissimos eius magnam doloremque vel nemo perspiciatis vero rerum ratione, numquam dicta, id sit sapiente iste velit? Optio voluptas totam nihil necessitatibus obcaecati, a labore adipisci sed nobis molestias. Praesentium, amet earum saepe quisquam quod officiis voluptatum nulla fuga facere ipsum optio odio id dolorum, repellendus, dignissimos accusamus consequuntur repellat aspernatur. Animi, corrupti, molestiae commodi dicta doloribus modi molestias odit exercitationem, quibusdam adipisci dolorem est! Necessitatibus dolorem aliquam totam facere illo expedita amet.';
    $arr_par = explode('.', $par);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
    <link rel="stylesheet" href="../style/common.css">
</head>
<body>
    <h1>Snack 5</h1>
    <h4>Testo</h4>
    <p><?php echo $par ?></p>
    <h4>Frasi</h4>
    <ul style="list-style-type: disc; text-align: left;">
        <?php
            for($i = 0; $i < count($arr_par); $i++) {
                echo '<li>'.$arr_par[$i].'</li>';
            }
        ?>
    </ul>
</body>
</html>