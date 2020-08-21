<?php

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
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Username...">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password...">
                            </div>
                            <button type="button" class="btn btn-primary btn-block">Login</button>
                            <a href ="konten/register.php" class="btn btn-success btn-block">Register </a>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>