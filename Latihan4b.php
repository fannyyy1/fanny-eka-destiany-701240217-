<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4b - Array</title>
</head>
<body>

<h2>Daftar Negara ASEAN awal :</h2>
<ul>
    <?php
    $negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

    foreach ($negara_asean as $negara) {
        echo "<li>" . $negara . "</li>";
    }
    ?>
</ul>

<h2>Daftar Negara ASEAN baru :</h2>
<ul>
    <?php
    // Menambahkan 3 elemen baru
    $negara_asean[] = "Filipina";
    $negara_asean[] = "Laos";
    $negara_asean[] = "Myanmar";

    foreach ($negara_asean as $negara) {
        echo "<li>" . $negara . "</li>";
    }
    ?>
</ul>

</body>
</html>