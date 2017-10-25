<?php

$isSubmitted = isset($_REQUEST['submit']);

if ($isSubmitted) {

    echo 'Zoekresultaten voor' . $_GET['search'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>oefening-09</title>
</head>
<body>
    
    <form action="" method="GET">
        <label for="input_user">Zoekveld</label>
        <input id="input_user" type="text" name="search">

        <input type="submit" name="submit">
    </form>

</body>
</html>