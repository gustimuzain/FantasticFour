<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="inter/css/main.css">
        <link rel="stylesheet" href="inter/css/responsive.css">
    </head>
    <body>
        <header>
            <nav class="navbar bg-white navbar-expand-md shadow p-3 mb-5 fixed-top">
                <a class="navbar-brand" href="index.html">
                    <img src="inter/image/logoF4.png" alt="logo" class="logo">
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
             
        <div class="card ">
            <div class="promo">
                <h1 class="display-4 m-3">Bingung cari mobil dimana? Fantastic Four Solusinya!</h1>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2253F5" fill-opacity="1" d="M0,160L34.3,138.7C68.6,117,137,75,206,101.3C274.3,128,343,224,411,272C480,320,549,320,617,309.3C685.7,299,754,277,823,240C891.4,203,960,149,1029,154.7C1097.1,160,1166,224,1234,224C1302.9,224,1371,160,1406,128L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="card datep">
                <div class="d-flex align-items-center flex-column">
                    <div class="date-picker-row mt-3">
                        <div class="row">
                            <div class="ml-5 coloumn-dp">
                                <div>
                                    <div><p>Tanggal Mulai</p></div>
                                    <div><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                            <div class="ml-5 coloumn-dp">
                                <div>
                                    <div><p>Tanggal Selesai</p></div>
                                    <div><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                            <div class="ml-5 coloumn-dp">
                                <div>
                                    <div><p>Waktu Mulai</p></div>
                                    <div><i class="far fa-clock"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 p-3">
                        <a href="#" class="btn btn-primary">Cari Mobil</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                @foreach($mobil as $mbl)
                <div class="col-sm-12 col-md-4">
                    <div class="card shadow p-3 mb-5" id="cardmobil">
						<div class="productinfo text-center">
							<img src="/data_file/{{ $mbl->gambar }}" alt="" />
							<div class="">
                                <h5 class="">{{ $mbl->nama }}</h5>
                                <div class="d-flex justify-content-center">
                                    <span class="badge badge-pill badge-secondary align-self-center">Manual</span>
                                    <div class="ml-2">
                                        <span><i class="fas fa-user"></i>4</span>
                                    </div>
                                </div>
                            </div>
							<a href="#" class="btn btn-primary mt-4">Pilih</a>
						</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <div class="footer">
            <div class="contain">
                <div class="col">
                    <h1>Tentang</h1>
                    <h1>Pusat Bantuan</h1>
                    <h1>Kebijakan</h1>
                </div>
                <div class="col social ml-auto">
                    <h1>Sosial</h1>
                    <ul>
                        <li>WhatsApp<img src="" width="32" style="width: 32px;">08977876777</li>
                        <li>Email<img src="" width="32" style="width: 32px;">fantastic4rent@gmail.com</li>
                        <li>Instagram<img src="" width="32" style="width: 32px;">fantastic4rent</li>
                    </ul>
                </div>
            <div class="clearfix"></div>
            </div>
        </div>
    </body>
</html>