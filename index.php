<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>PHP Pertama</title>
</head>
<body>
<h1>Demo PHP</h1>

<p>
<?php echo "PHP diproses di server."; ?>
</p>
</body>
</html>


<?php

// <!-- variabel dan tipe data -->
echo "Halo, Pemrograman Web!";
$nama = "Andi";
$umur = 20;
$aktif = true;
$nilai = 87.5;
echo $nama;
echo "<br>";
echo $umur;
echo "<br>";
echo $aktif ? "Aktif" : "Tidak aktif";
echo "<br>";
echo $nilai;
echo "<br>";
// interpolasi string
$nama = "Andi";
echo "Halo, $nama";
// konversi sederhana
$jumlah = 5;
$harga = 12000;
$total = $jumlah * $harga;
echo "<br>";
echo "Total: " . $total;
// operator
$a = 10;
$b = 3;
echo"<br/>";
echo $a + $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a > $b ? "a lebih besar" : "a tidak lebih besar";
?>
<br/>
<!-- if else -->
 <?php
$nilai = 78;
if ($nilai >= 80) {
echo "Sangat baik";
} elseif ($nilai >= 70) {
echo "Baik";
} else {
echo "Perlu perbaikan";
}
?>

<!-- perulangan ngagunakeun for -->
 <?php
for ($i = 1; $i <= 10; $i++) {
echo "Data ke-$i<br>";
}
?>
<br>

<!-- perulangan ngagunakeun foreach kanggo list -->
 <?php
$kategori = ["Akademik", "Layanan", "Program"];
foreach ($kategori as $item) {
echo $item . "<br>";
}
?>

<!-- function -->
 <?php
$kategori = ["Akademik", "Layanan", "Program"];
foreach ($kategori as $item) {
echo $item . "<br>";
}
?>

<!-- function nganggo validasi sederhana -->
 <?php
function formatNama(string $nama): string {
return trim($nama);
}
$nama = formatNama(" Andi ");
echo $nama;
?>
<br>
<!-- function kanggo panghitungan -->
 <?php
function hitungTotal(float $harga, int $jumlah): float {
return $harga * $jumlah;
}
$total = hitungTotal(15000, 3);
echo "Total: " . $total;
?>