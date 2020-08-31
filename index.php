<?php


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
		$errornama = "Email tidak boleh kosong";
		$errorPassword = "Password tidak boleh kosong";
	}else if(!empty($nama) && !empty($password) && !filter_var($nama, FILTER_VALIDATE_EMAIL)){
		$errornama = "Format harus nama";
	}else{
		$result = mysqli_query($con, "SELECT * FROM ramadan WHERE tbl_user='$nama' AND password='$password'");
		$count = mysqli_num_rows($result);
		
		if($count > 0){
			$data = mysqli_fetch_assoc($result);
			
			if($data['role'] == 'admin'){
				$_SESSION['nama'] = $nama;
				$_SESSION['role'] = "admin";
				
				echo "<script>alert('sukses');window.location.href = konten/dashboard.php';</script>";
			}else if($data['role'] == 'user'){
				$_SESSION['nama'] = $nama;
				$_SESSION['role'] = "user";
				
				echo "<script>alert('gagal');window.location.href = 'konten/dashboard.php';</script>";
			}else{
				header("location.index.php?pesan=Gagal");
			}
		}else{
			$errorData = "Data tidak terdaftar";
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
    <link href="image/logohero2.png" rel="shortcut icon"'>
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
                        <form action="" method="POST" >
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" 
                                placeholder="Username..." name="nama" >
                                <span><?= $errornama; ?></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="password" class="form-control" 
                                id="exampleFormControlInput1" placeholder="Password..." name="password">
                                <span><?= $errorPassword; ?></span>
                            </div>
                            <button type="button" class="btn btn-primary btn-block" name="login">Login</button>
                            <a href ="konten/register.php" class="btn btn-success btn-block">Register </a>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>