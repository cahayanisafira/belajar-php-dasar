<?php
// Belajar PHP Dasar

echo "Hello, World! <br>";

// Variabel
$nama = "Cahayani";
$umur = 20;
echo "Nama saya $nama, umur saya $umur tahun. <br>";

// Tipe data
$angka = 100;
$desimal = 3.14;
$boolean = true;

echo "Angka: $angka <br>";
echo "Desimal: $desimal <br>";
echo "Boolean: " . ($boolean ? "true" : "false") . "<br>";

// Percabangan
if ($umur >= 18) {
    echo "Anda sudah dewasa. <br>";
} else {
    echo "Anda masih anak-anak. <br>";
}

// Perulangan
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i <br>";
}
?>
