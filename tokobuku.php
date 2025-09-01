<?php

$namaPelanggan = "Raja Kadafi";
$judulBuku = "Dasar-Dasar Akutansi";
$jumlahBuku = 4;
$hargaSatuan = 75000;
$isMember = true; // pelanggan adalah member

function hitungTotal($jumlah, $harga) {
    return $jumlah * $harga;
}

function diskonMember($total, $isMember) {
    if ($isMember) {
        return $total * 0.10; // diskon 10%
    }
    return 0;
}

function cetakStruk($nama, $judul, $jumlah, $harga, $isMember) {
    $totalAwal = hitungTotal($jumlah, $harga);
    $diskon = diskonMember($totalAwal, $isMember);
    $totalAkhir = $totalAwal - $diskon;

    echo "===== Kegelapan Ilmu - Toko Buku Online =====\n";
    echo "Nama Pelanggan : $nama\n";
    echo "Judul Buku     : $judul\n";
    echo "Jumlah Buku    : $jumlah\n";
    echo "Harga Satuan   : Rp " . number_format($harga, 0, ',', '.') . "\n";
    echo "----------------------------------------\n";
    echo "Total Awal     : Rp " . number_format($totalAwal, 0, ',', '.') . "\n";
    echo "Diskon Member  : Rp " . number_format($diskon, 0, ',', '.') . "\n";
    echo "Total Bayar    : Rp " . number_format($totalAkhir, 0, ',', '.') . "\n";
    echo "----------------------------------------\n";
    echo "Status Member  : " . ($isMember ? "Ya" : "Tidak") . "\n";
    echo "Terima kasih telah berbelanja di Cahaya Ilmu!";
}

cetakStruk($namaPelanggan, $judulBuku, $jumlahBuku, $hargaSatuan, $isMember);
?>
