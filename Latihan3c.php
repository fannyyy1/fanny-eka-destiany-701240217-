<!DOCTYPE html>
<html>
<head>
    <title>Function Pangkat</title>
</head>
<body>

<?php
function pangkat($angka, $pangkat) {
    return pow($angka, $pangkat); // atau $angka ** $pangkat, rumus untuk mencari pangkat
}

$hasil = pangkat(5, 4);

echo "5 pangkat 4 = $hasil<br>";
?>

</body>
</html>