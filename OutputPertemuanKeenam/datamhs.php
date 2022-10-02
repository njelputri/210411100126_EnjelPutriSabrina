<?php
$koneksi = mysqli_connect("localhost", "root", "", "coba");
$sql = "SELECT id_mhs, nama_mhs, nama_prodi, alamat_mhs
FROM tbl_mhs m, tbl_prodi n 
WHERE m.id_prodi = n.id_prodi";
$hasil = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pertemuan Ke 6</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
    body{
      background-color: cyan;}
    .kolom{
      background-color: white;
    }
    table{
      margin-top: 10px;
    }
    </style>
</head>
<body>

<div class="container mt-3">
  <h2>Data Mahasiswa Teknik</h2>
  <p>Data ini dari MySQL</p>

  <a href="form1.php"><button type="button" class="btn btn-primary">Tambah</button></a>

  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Id Mahasiswa</th>
        <th>Nama Mahasiswa</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php
        while($baris = mysqli_fetch_assoc($hasil)){
      ?>
      <tr class="kolom">
        <td><?php echo $baris["id_mhs"]; ?></td>
        <td><?php echo $baris["nama_mhs"]; ?></td>
        <td><?php echo $baris["nama_prodi"]; ?></td>
        <td><?php echo $baris["alamat_mhs"]; ?></td>
        <td>
        <button type="button" class="btn btn-success">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
        </td>
      </tr>

      <?php }?>
    </tbody>
  </table>
</div>

</body>
</html>