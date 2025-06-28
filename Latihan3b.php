<!DOCTYPE html>
<html>
<head>
    <title>Penjelasan isset() dan empty()</title>
</head>
<body>

<h2>Penjelasan Fungsi <code>isset()</code> dan <code>empty()</code> dalam PHP</h2>

<p><strong>isset()</strong> digunakan untuk mengecek apakah sebuah variabel sudah dibuat dan nilainya bukan <code>null</code>. Jika variabel belum didefinisikan atau bernilai <code>null</code>, maka <code>isset()</code> akan menghasilkan <strong>false</strong>.</p>

<p><strong>empty()</strong> digunakan untuk mengecek apakah sebuah variabel dianggap kosong. Nilai yang dianggap kosong oleh <code>empty()</code> antara lain:</p>
<ul>
    <li>"" (string kosong)</li>
    <li>0 (angka nol)</li>
    <li>"0" (string nol)</li>
    <li>null</li>
    <li>false</li>
    <li>array kosong</li>
    <li>variabel yang belum dibuat</li>
</ul>

<hr>

<h3>Contoh Program dan Hasilnya:</h3>

<?php
$nilai1 = "PHP";     // Variabel berisi string
$nilai2 = "";        // Variabel string kosong
// $nilai3 tidak dideklarasikan

echo "<strong>Variabel \$nilai1 = 'PHP'</strong><br>";
echo "isset(\$nilai1): " . (isset($nilai1) ? "true" : "false") . "<br>";
echo "empty(\$nilai1): " . (empty($nilai1) ? "true" : "false") . "<br><br>";

echo "<strong>Variabel \$nilai2 = ''</strong><br>";
echo "isset(\$nilai2): " . (isset($nilai2) ? "true" : "false") . "<br>";
echo "empty(\$nilai2): " . (empty($nilai2) ? "true" : "false") . "<br><br>";

echo "<strong>Variabel \$nilai3 belum dideklarasikan</strong><br>";
echo "isset(\$nilai3): " . (isset($nilai3) ? "true" : "false") . "<br>";
echo "empty(\$nilai3): " . (empty($nilai3) ? "true" : "false") . "<br>";
?>

</body>
</html>