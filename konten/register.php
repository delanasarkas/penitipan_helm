    <?php

    include("../koneksi/koneksi.php");

    if(isset($_POST['save'])){
        $nik = htmlspecialchars($_POST['nik']);
        $nama = htmlspecialchars($_POST['nama']);
        $password = htmlspecialchars($_POST['password']);
        $divisi_bagian = htmlspecialchars($_POST['divisi_bagian']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $no_tlp = htmlspecialchars($_POST['no_tlp']);

        $result = mysqli_query($con, "INSERT INTO tbl_user (nik, nama, password, divisi_bagian, alamat, no_tlp, level ) VALUES ('$nik','$nama','$password','$divisi_bagian','$alamat','$no_tlp','$level)");
        echo "<script>alert('Data Tersimpan');window.location.href = '../index.php';</script>";
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register </title>
        <link rel="stylesheet" href="../assets/bootstrap.css">
        <link href="../image/logohero2.png" rel="shortcut icon"'>
    </head>
    <body class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card mt-3 bg-info">
                        <div class="card-body">
                            <h1 class="text-center">REGISTER</h1>
                            <img src="../image/logohero.png" class="img-fluid" alt="Responsive image">
                            <p class="text-muted text-center">
                                &copy; Aplikasi Penitipan Barang 2020
                            </p>
                            <hr>
                            <form action="" method="POST" autocomplete="off">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nik</label>
                                    <input type="nik" class="form-control" id="exampleFormControlInput1" placeholder="Nik..." name="nik" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Username</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Username..." name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password..." name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="divisi_bagian">Divisi Bagian</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Divisi Bagian..." name="divisi_bagian" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alamat..." name="alamat" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_tlp">No Telephon</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="No Telephon..." name="no_tlp" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-block" name="save" >Register</button>
                                <a href="../index.php" class="btn btn-dark btn-block">Back</a>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>