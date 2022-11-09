<?php


    $tanggal = $_POST['tanggal'];

    $namcus = $_POST['namcus'];  

    $tipe= $_POST['tipe'];
    
    $durasi = $_POST['durasi'];

?> 
<html> 
    <head> 
       <title>Sedayu Apart</title> 
    </head> 
    <body> 
        <center>
        <h1>BOOKING TIKET HOTEL</h1> 
        </center>
        <?php 
            echo "<p>Terima kasih ".$namcus. " sudah membooking </p>";
            echo "<p>Tanggal Booking : ".$tanggal. "</p>";   
            echo "<p>Tipe Kamar : ".$tipe. "</p>"; 
            echo "<p>Durasi Menginap : ".$durasi. "</p>";
        ?>
