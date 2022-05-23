<?php
$welcome = '';
    if(isset($_GET['name'])) {
        if(isset($_GET['mail'])) {
            if(isset($_GET['age'])) {
                $name = $_GET['name'];
                $mail = $_GET['mail'];
                $age = $_GET['age'];
                if(strlen($name) >= 3 && (strpos($mail, '@') && strpos($mail, '.')) != false && is_numeric($age)) {
                    $message = 'Accesso riuscito';
                    $welcome = 'Banvenuto '.ucfirst($name);
                } else {
                    $message = 'Accesso negato';
                }
            } else {
                $message = 'Inserisci "age"';
            }
        } else {
            $message = 'Inserisci le credenziali "mail" ed "age"';
        }
    } else {
        $message = 'Inserisci le credenziali tramite i parametri "name", "mail" ed "age"';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
    <link rel="stylesheet" href="../style/common.css">
</head>
<body>
    <h1><?php echo $message ?></h1>
    <h2><?php echo $welcome ?></h2>
</body>
</html>