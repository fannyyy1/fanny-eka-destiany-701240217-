<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4c - Associative Array</title>
</head>
<body>

<h2>Daftar Negara ASEAN dan Ibukota:</h2>
<ul>
    <?php
    $negara_ibukota = array(
        "Indonesia" => "DKI Jakarta",
        "Singapura" => "Singapura",
        "Malaysia" => "Kuala Lumpur",
        "Brunei" => "Bandar Seri Begawan",
        "Thailand" => "Bangkok",
        "Filipina" => "Manila",
        "Laos" => "Vientiane",
        "Myanmar" => "Naypyidaw"
    );

    foreach ($negara_ibukota as $negara => $ibukota) {
        echo "<li>" . $negara . ": " . $ibukota . "</li>";
    }
    ?>
</ul>

</body>
</html>