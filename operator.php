<?php
//operator aritmatika 
$angka1 = 15;
$angka2 = 5;
$hasilpenjumlahan = $angka1 + $angka2;
$hasilpengurangan = $angka1 - $angka2;
$hasilperkalian = $angka1 * $angka2;
$hasilpembagian = $angka1 / $angka2;
echo "Hasil Penjumlahan: " . $hasilpenjumlahan . "<br>";
echo "Hasil Pengurangan: " . $hasilpengurangan . "<br>";
echo "Hasil Perkalian: " . $hasilperkalian . "<br>";
echo "Hasil Pembagian: " . $hasilpembagian . "<br>";


// Modulus
$angka3 = 10;
$angka4 = 4;
$hasilmodulus = $angka3 % $angka4;
echo "Hasil Modulus: " . $hasilmodulus . "<br>";

//assignment operator
$angka3 += $angka4; // sama dengan $angka3 = $angka3 + $angka4
echo "Hasil Assignment: " . $angka3 . "<br>";
$angka1 -= $angka2;
echo "Hasil Assignment: " . $angka1 . "<br>";

//comprison operator
$x = 5;
$y = 10;
$hasilperbandingan = ($x == $y); // Hasilnya false
var_dump($hasilperbandingan);

$p = 5;
$q = 5;
$hasilperbandingan2 = ($p === $q); // Hasilnya true karena tipe data dan nilai sama
var_dump($hasilperbandingan2);

$a = 2;
$b = 3;
$hasilperbandingan3 = ($a != $b); // Hasilnya true karena nilai berbeda
var_dump($hasilperbandingan3);

$angka5 = 10;
$angka6 = 20;
$hasilkomparasi = ($angka5 > $angka6); // Hasilnya false
var_dump($hasilkomparasi);

$u = 4;
$v = 8;
$hasilkomparasi2 = ($u <= $v); // Hasilnya true
var_dump($hasilkomparasi2);
var_dump($hasilkomparasi2);

//Increment dan Decrement
$s = 10;
$s++; // sama dengan $s = $s + 1
echo "Hasil Increment: " . $s . "<br>";
$s--; // sama dengan $s = $s - 1
echo "Hasil Decrement: " . $s . "<br>";

//logical operator
$kondisi1 = true;
$kondisi2 = false;
$hasillogika = $kondisi1 && $kondisi2 ; // Hasilnya false karena salah satu kondisi bernilai false
var_dump($hasillogika);

$kondisi3 = true;
$hasillogika2 = $kondisi1 || $kondisi3; // Hasilnya true karena salah satu kondisi bernilai true
var_dump($hasillogika2);
?>