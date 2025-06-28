<!DOCTYPE html>
<html>
<head>
    <title>Function Faktorial</title>
</head>
<body>

<?php
function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
        $hasil *= $i;
    }
    echo "Faktorial dari $a = $hasil";
}

faktorial(5);
?>

</body>
</html>