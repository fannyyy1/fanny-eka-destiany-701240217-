<!DOCTYPE html>
<html>
<head>
    <title>Grid Kotak Huruf</title>
    <style>
        .container {
            width: 120px;
            border: 1px solid #000;
            padding: 10px;
        }
        .row {
            display: flex;
            margin-bottom: 5px;
        }
        .box {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 5px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

<?php
// Gunakan variabel untuk setiap huruf
$a = "A";
$b = "B";
$c = "C";
?>

<div class="container">
    <div class="row">
        <div class="box"><?= $a ?></div>
    </div>
    <div class="row">
        <div class="box"><?= $a ?></div>
        <div class="box"><?= $b ?></div>
    </div>
    <div class="row">
        <div class="box"><?= $a ?></div>
        <div class="box"><?= $b ?></div>
        <div class="box"><?= $c ?></div>
    </div>
</div>

</body>
</html>
