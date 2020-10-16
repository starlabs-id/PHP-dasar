<?php
/* contohWhileAndDoWhile - menggunakan while dan do-while untuk menghitung jumlah dari suatu bilangan */

/* while loop */
echo "contoh penggunaan while <br>";
$varAwal = 1;
$varAkhir = 10;
$jumlah = 0;

while($varAwal<=$varAkhir)
{
$jumlah += $varAwal;
echo $jumlah.", ";
$varAwal += 1;
}

echo "<br>";
echo $jumlah;

/* do-while loop */
echo "<br><br> contoh penggunaan do-while <br>";
$varAwal = 1;
$varAkhir = 10;
$jumlah = 0;

do
{
$jumlah += $varAwal;
echo $jumlah.", ";
$varAwal += 1;
}while($varAwal <= $varAkhir);

echo "<br>";
echo $jumlah;
?>
