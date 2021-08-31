<?php
error_reporting(0);





if(isset($_GET['close'])){
    $firstname = $_GET["firstname"].PHP_EOL;
    $linecount = 0;

    $file="list.txt";
    $handle = fopen($file, "r");
    if ($handle) {
        while(!feof($handle)){
            $line = fgets($handle);
            $linecount++;
        }
        echo "<script>console.log($linecount)</script>";
        fclose($handle);
    }else{
        //Error Logging
    }


   if ($linecount <= 10){
       $fp = fopen('list.txt', 'a+');
       fwrite($fp, $firstname);
       fclose($fp);
   }else{
       echo "Die Liste ist voll!";
   }




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

<ul class="navbar">
    <li id="active" class="entry"><a href="index.php">Projekt 1</a></li>
    <li class="entry"><a href="">Projekt2</a></li>
    <li class="entry"><a href="">Projekt3</a></li>
    <li class="entry"><a href="">Projekt4</a></li>
</ul>

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
        echo "<script>console.log('File not found')</script>";
    }

    ?>
</ol>
</ol>

<form class="formdelete" action="index.php" method="get">
    <!--<input class="delete" type="submit" name="delete" value="delete">-->
</form>


</body>
</html>
