
<?php

  include 'config/app.php';

  if (isset($_POST['tambah'])) {
    if(create_produk($_POST) > 0){
      echo "<script>
            alert('Data Produk berhasil Ditambahkan');
            document.location.href = 'index.php';
          </script>";
    }
    else{
      echo "<script>
            alert('Data Produk Gagal Ditambahkan');
            document.location.href = 'index.php';
          </script>";
    }
  } 
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah produk</title>
</head>

<body>
    <div class="container mt-5">
      <h1>Tambah produk</h1>
      <hr>
      <form action="" method="post">
        <div class="mb-3">
          <label for="nama_produk" class="form-label">Nama Produk</label>
          <input type="text" class="form-control" id="nama_produk" name= "nama_produk"placeholder="Nama Produk..."
          required>

        </div>
        
        <div class="mb-3">
          <label for="harga_produk" class="form-label">Harga Produk</label>
          <input type="number" class="form-control" id="harga_produk" name= "harga_produk"placeholder="Harga Produk..."
          required>
        </div>
        
        <div class="mb-3">
          <label for="stok_produk" class="form-label">Stok Produk</label>
          <input type="number" class="form-control" id="stok_produk" name= "stok_produk"placeholder="Stok Produk..."
          required>
        </div>
        <div class="mb-3">
          <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
          <textarea class="form-control" id="deskripsi_produk" name= "deskripsi_produk" rows="3"></textarea>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary mb-1" style="float: right;">Tambah</button>
      </form>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></scrip>


</body>

</html>