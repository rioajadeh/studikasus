<?php

$keranjang = [];

function tambahBarang(&$keranjang, $nama, $harga, $jumlah) {
    $keranjang[] = [
        'nama' => $nama,
        'harga' => $harga,
        'jumlah' => $jumlah,
        'subtotal' => $harga * $jumlah
    ];
}
function hitungTotal($keranjang) {
    $total = 0;
    foreach ($keranjang as $item) {
        $total += $item['subtotal'];
    }
    return $total;
}
function tampilkanStruk($keranjang) {
    echo "===== Mini Market Sejahtera =====\n";
    echo "        Struk Belanja:\n";
    echo "--------------------------------\n";
    foreach ($keranjang as $item) {
        echo $item['nama'] . " (" . $item['jumlah'] . " x " . $item['harga'] . ") = Rp " . $item['subtotal'] . "\n";
    }
    echo "--------------------------------\n";
    echo "Total: Rp " . hitungTotal($keranjang) . "\n";
    echo "Terima kasih telah berbelanja!";
}

tambahBarang($keranjang, "Indomie Goreng", 3500, 3);
tambahBarang($keranjang, "Aqua Botol 600ml", 4000, 2);
tambahBarang($keranjang, "Susu UHT", 7500, 1);

tampilkanStruk($keranjang);
?>
