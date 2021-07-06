<?php

$length = 10;
for ($i = 0; $i < $length; $i++) {

    // cetak garis sesuai jumlah n saat ini
    for ($j = $length; $j > $i; $j--) {
        echo "_";
    }

    // cetak x sesuai n*2
    for ($k = -0; $k < $i * 2; $k++) {
        echo "x";
    }
    // buat baris baru setelah cetak garis
    echo "<br>";
}
// looping kebalikan
for ($i = $length; $i >= 0; $i--) {

    // cetak garis sesuain n kebalik
    for ($j = $length; $j > $i; $j--) {
        echo "_";
    }

    // cetak x sesuai n kebalik *2
    for ($k = -0; $k < $i * 2; $k++) {
        echo "x";
    }
    // buat baris baru setelah cetak garis
    echo "<br>";
}
