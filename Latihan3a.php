<!DOCTYPE html>
<html>
<head>
    <title>Ganti Style Tulisan</title>
    <style>
        .ganti-style {
            font-size: 28px;
            font-family: Arial, sans-serif;
            color: #1A0547;
            font-style: italic;
            font-weight: bolder;
        }
    </style>
</head>
<body>

<?php
// Fungsi untuk mengubah style tulisan
function ganti_style($tulisan, $kelas) {
    return "<span class='$kelas'>$tulisan</span>";
}

// Pengisian variabel
$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

// Pemanggilan fungsi
echo ganti_style($tulisan, $kelas);
?>

</body>
</html>