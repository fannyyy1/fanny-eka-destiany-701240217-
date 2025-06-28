<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Modul 2 - Latihan 1 </title>
    </head>
    <body>
        <table border="1" cellpadding="3" cellspacing="0">
            <tr>
                <th> Kolom 1 </th>
                <th> Kolom 2 </th>
                <th> Kolom 3 </th>
                <th> Kolom 4 </th>
                <th> Kolom 5 </th>
            </tr>

            <?php
            // variabel untuk jumlah baris dan kolom
            $jumlah_baris = 15;
            $jumlah_kolom = 5;

            // looping baris
            for ($baris = 1; $baris <= $jumlah_baris; $baris++) {
                echo "<tr>";
                // looping kolom
                for ($kolom = 1; $kolom <= $jumlah_kolom; $kolom++) {
                    echo "<td> Baris $baris Kolom $kolom </td>";
                }
                echo "</tr>";
            }
            ?>

        </table>
    </body>
</html>