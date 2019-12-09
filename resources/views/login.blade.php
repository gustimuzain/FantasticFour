<!DOCTYPE html>
<html lang="en">
    <head>
    <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="inter/css/main.css">
        <link rel="stylesheet" href="inter/css/responsive.css">
    </head>

    <body>
        <header>
            <nav class="navbar bg-white navbar-expand-md shadow p-3 mb-5 fixed-top">
                <a class="navbar-brand" href="index.html">
                    <img src="image/logoF4.png" alt="logo" class="logo">
                </a>
                <ul class="navbar-nav navbar-center">
                        <li class="nav-item">
                            <a class="nav-link" href="">LAYANAN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">SYARAT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">KONTAK</a>
                        </li>
                </ul>
                <div class="navbar-nav ml-auto">
                    <a href="daftar.html" class="nav-item nav-link">Login</a>
                    <a href="masuk.html" class="nav-item nav-link">Daftar</a>
                </div>
            </nav>
        </header>

        <img src="image/fantasticFourIl.png" alt="" class="ilus">
        <div class="container">
            <div class="row card shadow p-3 mb-5 register">
                <div class="">
                    <form>
                        <center><h5>Masuk</h5></center>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control nama" name="email" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control pass" name="password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Daftar</button>
                        </div>
                    </form>
                </div>
                <div class="text-center">Sudah punya akun? <a href=""><strong>Masuk</strong></a></div>
            </div>
        </div>
    </body>
</html>