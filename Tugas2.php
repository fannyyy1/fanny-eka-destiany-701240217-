<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2 - Kategorisasi NRP</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<h2>Data NRP dan Kategori:</h2>
<table>
    <thead>
        <tr>
            <th>NRP</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
<?php
        $data_mahasiswa = array(
            array("NRP" => "1021001", "Nama" => "Budi", "Deskripsi" => "Deskripsi Budi", "Gambar" => "https://via.placeholder.com/100/FF0000/FFFFFF?text=Gambar1"),
            array("NRP" => "1021002", "Nama" => "Ani", "Deskripsi" => "Deskripsi Ani", "Gambar" => "https://via.placeholder.com/100/00FF00/FFFFFF?text=Gambar2"),
            array("NRP" => "1021003", "Nama" => "Cici", "Deskripsi" => "Deskripsi Cici", "Gambar" => "https://via.placeholder.com/100/0000FF/FFFFFF?text=Gambar3"),
            array("NRP" => "1021004", "Nama" => "Dedi", "Deskripsi" => "Deskripsi Dedi", "Gambar" => "https://via.placeholder.com/100/FFFF00/000000?text=Gambar4"),
            array("NRP" => "1021005", "Nama" => "Eka", "Deskripsi" => "Deskripsi Eka", "Gambar" => "https://via.placeholder.com/100/00FFFF/000000?text=Gambar5"),
            array("NRP" => "1021006", "Nama" => "Fani", "Deskripsi" => "Deskripsi Fani", "Gambar" => "https://via.placeholder.com/100/FF00FF/FFFFFF?text=Gambar6"),
            array("NRP" => "1021007", "Nama" => "Gilang", "Deskripsi" => "Deskripsi Gilang", "Gambar" => "https://via.placeholder.com/100/800000/FFFFFF?text=Gambar7"),
            array("NRP" => "1021008", "Nama" => "Hani", "Deskripsi" => "Deskripsi Hani", "Gambar" => "https://via.placeholder.com/100/008000/FFFFFF?text=Gambar8"),
            array("NRP" => "1021009", "Nama" => "Indra", "Deskripsi" => "Deskripsi Indra", "Gambar" => "https://via.placeholder.com/100/000080/FFFFFF?text=Gambar9"),
            array("NRP" => "1021010", "Nama" => "Joko", "Deskripsi" => "Deskripsi Joko", "Gambar" => "https://via.placeholder.com/100/808000/FFFFFF?text=Gambar10")
        );

        foreach ($data_mahasiswa as $mahasiswa) {
            $nrp = $mahasiswa["NRP"];
            $tiga_digit_terakhir = (int)substr($nrp, -3); // Ambil 3 digit terakhir NRP
            $mod_5 = $tiga_digit_terakhir % 5;
$kategori = "";
            switch ($mod_5) {
                case 1:
                    $kategori = "Budaya Daerah di Indonesia";
                    break;
                case 2:
                    $kategori = "Penemuan-penemuan terkenal didunia";
                    break;
                case 3:
                    $kategori = "Flora dan Fauna beragam peubah";
                    break;
                case 4:
                    $kategori = "Pahlawan Nasional Indonesia";
                    break;
                case 0:
                    $kategori = "Perusahaan Teknologi";
                    break;
                default:
                    $kategori = "Tidak Diketahui";
            }

            echo "<tr>";
            echo "<td>" . $nrp . "</td>";
            echo "<td>" . $kategori . "</td>";
            echo "<td>" . $mahasiswa["Deskripsi"] . "</td>";
            echo "<td><img src='" . $mahasiswa["Gambar"] . "' alt='Gambar'></td>";
            echo "</tr>";
 }
        ?>
    </tbody>
</table>

</body>
</html>
