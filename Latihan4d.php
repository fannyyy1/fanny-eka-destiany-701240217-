<!DOCTYPE html>
<html>
<head>
    <title>Latihan 4d - Multidimensional Array</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>

<h2>Data Kota, Makanan Khas, dan Harga:</h2>
<table>
    <thead>
        <tr>
            <th>Negara</th>
            <th>Ibukota</th>
            <th>Kode Telepon</th>
        </tr>
 </thead>
    <tbody>
        <?php
        $data_negara_full = array(
            "Indonesia" => array("Ibukota" => "DKI Jakarta", "Kode Telepon" => "+62"),
            "Singapura" => array("Ibukota" => "Singapura", "Kode Telepon" => "+65"),
            "Malaysia" => array("Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60"),
            "Brunei" => array("Ibukota" => "Bandar Seri Begawan", "Kode Telepon" => "+673"),
            "Thailand" => array("Ibukota" => "Bangkok", "Kode Telepon" => "+66"),
            "Laos" => array("Ibukota" => "Vientiane", "Kode Telepon" => "+856"),
            "Filipina" => array("Ibukota" => "Manila", "Kode Telepon" => "+63"),
            "Myanmar" => array("Ibukota" => "Naypyidaw", "Kode Telepon" => "+95")
        );

        // Mengurutkan array berdasarkan kunci (nama negara)
        ksort($data_negara_full);

        foreach ($data_negara_full as $negara => $detail) {
            echo "<tr>";
            echo "<td>" . $negara . "</td>";
            echo "<td>" . $detail["Ibukota"] . "</td>";
            echo "<td>" . $detail["Kode Telepon"] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>