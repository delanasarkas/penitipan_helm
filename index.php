<?php

session_start();

include("koneksi/koneksi.php");

//VariableValidasi
$errornama = "";
$errorPassword = "";
$errorData = "";

//Submit
if(isset($_POST['login'])){
	$nama = htmlspecialchars($_POST['nama']);
	$password = htmlspecialchars(md5($_POST['password']));
	
	//ValidasiInput
	if(empty($nama) || empty($password)){
		$errornama = "<div class='alert alert-danger' role='alert'>
        <strong>Username tidak boleh kosong</strong>
        </div>";
		$errorPassword = "<div class='alert alert-danger' role='alert'>
        <strong>Password tidak boleh kosong</strong>
        </div>";
	}else{
		$result = mysqli_query($con, "SELECT * FROM tbl_user WHERE nama='$nama' AND password='$password'");
		$count = mysqli_num_rows($result);
		
		if($count > 0){
			$data = mysqli_fetch_assoc($result);
			
			if($data['level'] == 1){
                $_SESSION['nik'] = $data['nik'];
				$_SESSION['nama'] = $nama;
				$_SESSION['divisi_bagian'] = $data['divisi_bagian'];
				$_SESSION['alamat'] = $data['alamat'];
				$_SESSION['no_tlp'] = $data['no_tlp'];
                $_SESSION['level'] = "admin";
                
				echo "<script>alert('sukses login admin');window.location.href = 'konten/dashboard.php';</script>";
			}else if($data['level'] == 0){
                $_SESSION['nik'] = $data['nik'];
				$_SESSION['nama'] = $nama;
				$_SESSION['divisi_bagian'] = $data['divisi_bagian'];
				$_SESSION['alamat'] = $data['alamat'];
				$_SESSION['no_tlp'] = $data['no_tlp'];
                $_SESSION ['level'] = "karyawan";

				echo "<script>alert('sukses login karyawan');window.location.href = 'konten/dashboard.php';</script>";
			}else{
				header("location.index.php?pesan=Gagal");
			}
		}else{
			$errorData = "<div class='alert alert-danger' role='alert'>
            <strong>Data tidak terdaftar</strong>
            </div>";
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link href="image/logohero2.png" rel="shortcut icon">
</head>
<body class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card mt-3 bg-info">
                    <div class="card-body">
                        <h1 class="text-center">Welcome</h1>
                        <img src="image/logohero.png" class="img-fluid" alt="Responsive image">
                        <p class="text-muted text-center">
                            &copy; Aplikasi Penitipan Barang 2020
                        </p>
                        <hr>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" 
                                placeholder="Username..." name="nama" >
                               
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="password" class="form-control mb-3" 
                                id="exampleFormControlInput1" placeholder="Password..." name="password">
                                <span><?= $errornama; ?></span>
                                <span><?= $errorPassword; ?></span>
                                <span><?= $errorData; ?></span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                            <a href ="konten/register.php" class="btn btn-success btn-block">Register </a>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>