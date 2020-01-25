<?php

function count_handshake($hand)
{
    $hitung = 0;
    $loop = $hand - 1;

    // Gunakan perulangan dan tidak menggunakan rumus matematika 
    // n x (n-1)/2 atau ½.n.(n-1) ataupun yang lainnya! 
    // Jika menggunakan rumus tersebut akan dinilai salah!

    for ($i = 1; $i < $hand; $i++) {
        $hitung += $loop--;
    }

    return $hitung;
}

$hasil = count_handshake(6);

print($hasil);
