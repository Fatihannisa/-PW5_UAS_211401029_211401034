<?php 
  
  if(isset($_POST['tambah'])) {
    include_once 'koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['hp'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];

    $input = mysqli_query($connection, "INSERT INTO nama VALUES
    ('$id', '$nama', '$gender', '$tgl_lahir', '$alamat', '$no_hp', '$email', '$bio')");

    if ($input) {
      echo "<h3>Data berhasil ditambahkan</h3>";
      echo "<script>window.location = 'index.php'</script>";
    }
    else  {
      echo "Gagal menambahkan data";
      echo "<a href='tambah.php'>Kembali</a>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }