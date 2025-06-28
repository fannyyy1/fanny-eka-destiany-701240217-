<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Modul 2 - Latihan 1 </title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            border: 1px solid #000;
            float: left;
            text-align: center;
            line-height: 40px;
            margin: 2px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
$jumlah_baris = 5;

for ($baris = 1; $baris <= $jumlah_baris; $baris++) {
    for ($kolom = 1; $kolom <= $baris; $kolom++) {
        echo "<div class='kotak'>$kolom</div>";
    }
    echo "<div class='clear'></div>"; // pindah ke baris berikutnya
}
?>

</body>
</html>