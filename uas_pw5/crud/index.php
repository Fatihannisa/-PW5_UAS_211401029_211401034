<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixed Formulir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
        defer></script>
</head>

<body background="background.jpg">

<style type="text/css">
.jumbotron {
    background-image:url("background.jpg");
}
</style>
    <div class="jumbotron">
        <div class="container" >
            <div class="col-lg-12 text-center my-5" >
                <h3 class="display-4"><font color="white">Membership MOA</font></h3>
                <a href="tambah.php">
                    <h4>Tambah Member</h4>
                </a>
            </div>

            <table class="table table-striped table-light" style="text-align: center; ">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Birth Date</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>E-mail</th>
                    <th>Bio</th>
                    <th>Opsi</th>
                </thead>

                <!-- Menampilkan data membership -->
                <?php
                include_once 'koneksi.php';
                $no = 1;
                $data = mysqli_query($connection, "SELECT * FROM nama");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $d['id']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['gender']; ?></td>
                    <td><?php echo $d['tgl_lahir']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['no_hp']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td><?php echo $d['bio']; ?></td>
                    <td>
                        <a href="edit.php ?id=<?php echo $d['id']; ?>">Edit</a>
                        <a href="hapus.php ?id=<?php echo $d['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
                <!-- Menampilkan data membership -->
            </table>
            <div class="col text-right text-dark mt-2 " >
            <a href="/uas_pw5/utama.php" class="btn btn-primary btn-light text-dark mx-2" style="float: center;margin-top: 80px"><i>Back to TXT.Bighit</i></a>
        </div>
    </div>
    </div>

    <style type="text/css">
        footer {
        background: #ccc;
        color: #555;
        padding: 15px;
        text-align: center;
        }
        
      </style>
    <footer>
      Copyright &copy; Annisah Fithri_211401029, Fatihannisa Listy Zulmi_211401034
    </footer>

</body>

</html>