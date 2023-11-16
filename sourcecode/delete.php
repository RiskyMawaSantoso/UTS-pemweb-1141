<?php
include 'config/app.php';

$id_produk = (int)$_GET['id_produk'];
if (delete_produk($id_produk) > 0) {
    echo "<script>
        alert('Data Produk berhasil DiHapus');
        document.location.href = 'index.php';
        </script>";
}
else{
    echo "<script>
        alert('Data Produk Gagal DiHapus');
        document.location.href = 'index.php';
        </script>";
}
?>