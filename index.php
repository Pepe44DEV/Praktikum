<?php

if(isset($_GET['close'])){
    $firstname = $_GET["firstname"].PHP_EOL;

    $fp = fopen('list.txt', 'a+');
    fwrite($fp, $firstname);


}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Praktikums Projekt</title>
    <link href="main.css" rel="stylesheet">
    <script src="buttonfunctions.js"></script>
</head>
<body>


<h1 class="title">Room Manager</h1>
<ol id="Room1">
    <?php $handle = fopen('list.txt', 'r');

    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            echo "<li>" . $line . "</li>";
        }
        fclose($handle);
    } else {
        // error opening the file.
    }

    ?>
</ol>


<form action="index.php" method="get">
    <input type="submit" name="close" value="close">
    <input id="inputName" name="firstname" type="text" placeholder="Name eingeben">
</form>


</body>
</html>
