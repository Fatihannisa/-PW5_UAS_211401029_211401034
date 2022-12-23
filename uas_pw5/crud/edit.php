<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
        defer></script>
</head>

<style>
    p, td {
        color: white;
    }
</style>

<body background="background.jpg">
<br><br>
    <h3>
        <p style='margin-left:44%'>Edit data member</p>
    </h3>

    <!-- Edit data membership -->
    <?php
  include('koneksi.php');
  $id = $_GET['id'];
  $show = mysqli_query($connection, "SELECT * FROM nama WHERE id = '$id'");
  if (mysqli_num_rows($show) == 0) {
    echo '<script>window.history.back()</script>';
  } else {
    $d = mysqli_fetch_assoc($show);
  }
  ?>
    <!-- Edit data membership -->

    <form action="edit_proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br><br>
        <table style="margin-left:40%">
            <tr>
                <td>Full Name</td>
                <td> : </td>
                <td>
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
                </td>
            </tr>

            <tr>
                <td>Gender</td>
                <td> : </td>
                <td>
                    <select name="gender" required>
                        <option value="">Gender</option>
                        <option value="Male" <?php if ($d['gender'] == 'Male') {
                                    echo 'selected';
                                  } ?>>Male</option>
                        <option value="Female" <?php if ($d['gender'] == 'Female') {
                                      echo 'selected';
                                    } ?>>Female</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Birth Date</td>
                <td> : </td>
                <td>
                    <input type="date" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>" required>
                </td>
            </tr>

            <tr>
                <td>Address</td>
                <td> : </td>
                <td>
                    <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required>
                </td>
            </tr>

            <tr>
                <td>Phone Number</td>
                <td> : </td>
                <td>
                    <input type="number" name="hp" value="<?php echo $d['no_hp']; ?>" required>
                </td>
            </tr>

            <tr>
                <td>E-mail</td>
                <td> : </td>
                <td>
                    <input type="text" name="email"  value="<?php echo $d['email']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Bio</td>
                <td> : </td>
                <td>
                    <input type="text" name="bio" value="<?php echo $d['bio']; ?>" required>
                </td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td>
                    <input type="submit" name="simpan" value="simpan">
                </td>
            </tr>
        </table>
    </form>
    <br><br><br><br><br><br>

    <div class="col text-right text-dark mt-2 " >
    <a href="/uas_pw5/crud/index.php" class="btn btn-primary btn-light text-dark mx-2" style="float: center; height:35px"><i>Back to Membership</i></p></a>
    
    <a href="/uas_pw5/utama.php" class="btn btn-primary btn-light text-dark mx-2" style="float: center; height:35px"><i>Back to TXT.Bighit</i></a>
    </div>
</body>

</html>