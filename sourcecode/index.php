<?php
include 'config/app.php';

// untuk menampilkan
// function select($query){
//   global $db_connect;
//   $result = mysqli_query($db_connect, $query);
//   $rows = []; 
//   while($rown = mysqli_fetch_assoc($result)) {
//       $rows[] =$rown;
//   }
//   return $rows;
// }
$data_produk = select("SELECT * FROM products")
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Produk</title>
</head>

<body>
    <div class="container mt-5">
      <h1>Data Produk</h1>
      <hr>
      <a href="add.php" class="btn btn-primary mb-1">Tambah</a>
      <table class="table table-striped mt-3">
        <thread>
          <tr>
            <th>NO</th>
            <th>Nama produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
          </tr>
        </thread>

        <tboddy>

          <?php $no = 1;?>
          <?php foreach ($data_produk as $produk): ?>

          <tr>
            <td><?=$no++;?></td>
            <td><?=$produk['nama_produk'];?></td>
            <td>Rp. <?=number_format($produk['harga_produk'],0,',','.');?></td>
            <td><?=$produk['stok_produk'];?></td>
            <td><?=$produk['deskripsi_produk'];?></td>
            <td width="15%" class="text-center">
              <a href="edit.php?id_produk=<?= $produk['id_produk'];?>" class="btn btn-success">Edit</a>
              <a href="delete.php?id_produk=<?= $produk['id_produk'];?>" class="btn btn-danger" onclick= "return confirm('Yakin data produk akan dihapus?');">Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tboddy>
      </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>