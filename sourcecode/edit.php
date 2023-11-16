
<?php

    include 'config/app.php';
    //mengambil id_produk dari url
    $id_produk =(int)$_GET['id_produk'];
    $produk = select("SELECT * FROM products WHERE id_produk = $id_produk")[0];
    if (isset($_POST['edit'])) {
        if(update_produk($_POST) > 0){
            echo "<script>
                alert('Data Produk berhasil DiUbah');
                document.location.href = 'index.php';
                </script>";
        }
        else{
            echo "<script>
                alert('Data Produk Gagal DiUbah');
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

    <title>Edit Produk</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Edit Produk</h1>
        <hr>
        <form action="" method="post">
            <input type="hidden" name="id_produk" value="<?= $produk['id_produk'] ?>">
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name= "nama_produk" value="<?= $produk['nama_produk'];?>"placeholder="Nama Produk..."
                required>

            </div>

            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="harga_produk" name= "harga_produk" value="<?= $produk['harga_produk'];?>" placeholder="Harga Produk..."
                required>
            </div>

            <div class="mb-3">
                <label for="stok_produk" class="form-label">Stok Produk</label>
                <input type="number" class="form-control" id="stok_produk" name= "stok_produk" value="<?= $produk['stok_produk'];?>" placeholder="Stok Produk..."
                required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                <!-- <textarea type="text" class="form-control" id="deskripsi_produk" name= "deskripsi_produk" rows="3" value="textarea> -->
                <input type="text" class="form-control" id="deskripsi_produk" name= "deskripsi_produk" value="<?= $produk['deskripsi_produk'];?>" placeholder="Stok Produk..."
            </div>
            <button type="submit" name="edit" class="btn btn-primary mb-1" style="float: right;">Edit</button>
        </form>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></scrip>


</body>

</html>