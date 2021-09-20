<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malex | index</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c630c8eb00.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="app/css/normalize.css">
    <link rel="stylesheet" href="app/css/style.css">
</head>
<body>
<?php
include('app/views/header.php');

$path = 'app/views/';
if ($_GET['page']){
    $page = $_GET['page'];
    $display = $path . $page . '.php';
    include($display);
} else {
    echo 'Welcome to my dynamic web';
};
    
include('app/views/footer.php');
?>
</body>
</html>