<?php 
  
  if(isset($_POST['simpan'])) 
  {
    include ('koneksi.php');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['hp'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
    $update = mysqli_query($connection, "Update nama Set

    nama = '$nama',
    gender = '$gender',
    tgl_lahir = '$tgl_lahir',
    alamat = '$alamat',
    no_hp = '$no_hp',
    email = '$email',
    bio = '$bio'

    WHERE id = '$id'")
    
    or die(mysqli_error($connection));
    
    if($update)
    {
      echo "<script> alert('Data Anda Telah Diupdate'); window.location = 'index.php'; </script>";
    }

    else
    {
        echo "<h2>Gagal Menyimpan Data</h2>";
        echo "<a href = 'edit.php ?id = ".$id."'>kembali</a>";
    }
    }

    else 
    {
        echo "<script>window.history.back()</script>";
    }

  ?>