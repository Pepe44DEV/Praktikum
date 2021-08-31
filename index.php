<?php
error_reporting(0);




if(isset($_GET['close'])){
    $firstname = $_GET["firstname"].PHP_EOL;

    $fp = fopen('list.txt', 'a+');
    fwrite($fp, $firstname);


}

if(isset($_GET['delete'])) {
    unlink('list.txt');
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


<h1 class="title">Projekt Manager</h1>
<h3 class="info">Trage deinen Namen in die liste ein wenn du mitarbeiten möchtest</h3>



<form class="formenter" action="index.php" method="get">
    <input id="inputName" name="firstname" type="text" placeholder="Name eingeben">
    <input class="enterbutton" type="submit" name="close" value="Eintragen">
</form>

<ol class="Room1">
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
</ol>

<form class="formdelete" action="index.php" method="get">
    <input class="delete" type="submit" name="delete" value="delete">
</form>


</body>
</html>
