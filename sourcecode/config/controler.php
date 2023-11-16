<?php
include 'db.php';

// untuk menambahkan
function select($query){
    global $db_connect;
    $result = mysqli_query($db_connect, $query);
    $rows = []; 
    while($rown = mysqli_fetch_assoc($result)) {
        $rows[] =$rown;
    }
    return $rows;
}

//untuk menambahkan
function create_produk($post)
{
    global $db_connect;
    $id_produk         = $post['id_produk'];
    $nama_produk       = $post['nama_produk'];
    $harga_produk      = $post['harga_produk'];
    $stok_produk       = $post['stok_produk'];
    $deskripsi_produk  = $post['deskripsi_produk'];

    // query tambah
    $query ="INSERT INTO products VALUES(NULL, '$nama_produk', '$harga_produk', '$stok_produk', '$deskripsi_produk')";
    mysqli_query($db_connect, $query);
    return mysqli_affected_rows($db_connect);
}

//untuk edit
function update_produk($post)
{
    global $db_connect;
    $id_produk         = $post['id_produk'];
    $nama_produk       = $post['nama_produk'];
    $harga_produk      = $post['harga_produk'];
    $stok_produk       = $post['stok_produk'];
    $deskripsi_produk  = $post['deskripsi_produk'];

    // query edit
    $query ="UPDATE products SET nama_produk = '$nama_produk', harga_produk = '$harga_produk', stok_produk = '$stok_produk', deskripsi_produk = '$deskripsi_produk' WHERE id_produk = $id_produk";

    mysqli_query($db_connect, $query);
    return mysqli_affected_rows($db_connect);
}

//untuk hapus
function delete_produk($id_produk)
{
    global $db_connect;
    // query hapus
    $query = "DELETE FROM products WHERE id_produk = $id_produk";
    mysqli_query($db_connect, $query);
    return mysqli_affected_rows($db_connect);
}
