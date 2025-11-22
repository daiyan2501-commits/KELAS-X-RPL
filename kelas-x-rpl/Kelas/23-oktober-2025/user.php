<?php
    if (isset($_SESSION['email'])){
        header ('location: index.php')
    }
?>

<h1>user<?= $_SESSION['email']?></h1>