<?php 
session_start();
include "koneksi.php";

// Pengecekan apakah session 'cart' terdefinisi dan memiliki nilai
if(isset($_SESSION['cart']) && is_array($_SESSION['cart']) && count($_SESSION['cart']) > 0){
    $cart = $_SESSION['cart'];
    $lama_pinjam = 5; //satuan hari
    $tgl_harus_kembali = date('Y-m-d', mktime(0, 0, 0, date('m'), (date('d') + $lama_pinjam), date('Y')));
    mysqli_query($conn, "INSERT INTO peminjaman_buku (id_siswa, tanggal_peminjaman, tanggal_kembali) VALUES ('".$_SESSION['id_siswa']."', '".date('Y-m-d')."', '".$tgl_harus_kembali."')");
    $id = mysqli_insert_id($conn);

    foreach ($cart as $key_produk => $val_produk) {
        mysqli_query($conn, "INSERT INTO detail_peminjaman_buku (id_peminjaman_buku, id_buku, qty) VALUES ('".$id."', '".$val_produk['id_buku']."', '".$val_produk['qty']."')");
    }

    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil meminjam buku");location.href="histori_peminjaman.php"</script>';
} else {
    // Session 'cart' tidak terdefinisi atau kosong
    echo '<script>alert("Keranjang Anda kosong");location.href="keranjang.php"</script>';
}
?>
