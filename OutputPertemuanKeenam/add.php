<?php
    //menghubungkan dengan database
    $koneksi = mysqli_connect("localhost", "root", "", "coba");

    //memanggil data
    $id = $_POST['id_mhs'];
    $prodi = $_POST['id_prodi'];
    $nama = $_POST['nama_mhs'];
    $alamat = $_POST['alamat'];

    //melakukan query tambah data
    $sql = "INSERT INTO tbl_mhs VALUES('$id', '$prodi', '$nama', '$alamat')";
    $add = mysqli_query($koneksi,$sql);

    //Menampilkan notifikasi apakah data berhasil ditambah atau tidak
    if (!$add) {
        echo "<script> alert ('Gagal Menyimpan Data')</script>";
    }
    else{
        echo "Berhasil Menambahkan Data. ";
        echo "<a href='datamhs.php'>Tampilkan Data</a>";
    }
?>