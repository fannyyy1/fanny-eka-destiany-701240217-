<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengulangan Mendeteksi Bilangan</title>
</head>
<body>

<h3>Pengulangan untuk mencari kategori bilangan :</h3>
<ul>
<?php
function isPrima($angka) {
    if ($angka <= 1) return false;
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) return false;
    }
    return true;
}

for ($i = 1; $i <= 20; $i++) {
    $status = "";

    if ($i % 2 == 0) {
        $status .= "bilangan genap";
    } else {
        $status .= "bilangan ganjil";
    }

    if (isPrima($i)) {
        $status .= " dan sekaligus bilangan prima";
    }

    echo "<li>Angka $i adalah $status</li>";
}
?>
</ul>

</body>
</html>