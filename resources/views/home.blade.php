<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>MariTari</title>
  <!-- Bootstrap core CSS-->
  <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
</head>
<body>
@section('header')
    <header class="banner">
  <img class="gambarEvent"src="{{ URL::asset('img/1.jpg') }}" width="100%" "align="center">

  <div class="title">
    <h1 style="color:white;">"Mari Tari <span style="color:orange;"> Mari Belajar"</span></h1>
    <p class="sub"style="color:white;">MariTari adalah sebuah website pembelajaran tari dan penyewaan tiket tari</p>
    <a class="btn btn-warning btn-lg" href="{{URL('/login')}}" role="button">Login Untuk Selengkapnya</a>
  </div>

  <div class="logo-wrapper">
    <a href="login"><h2 style="color:white;">Mari<span style="color:orange">Tari</span></h2></a>
  </div>

</header>
<section>
<div class="section1">
    <div class="inner">
      <div class="content">
        <h3 style="font-style:italic;">Mengapa Kita Hadir ?</h3>
        <br>
        <div class="row">
          <div class="col-sm-4">
            <h4><strong>Menjadi perantara guru tari dan penari</strong></h4>
            <img src="dist/img/icon-data.png"><br>
            <p>Kami menyediakan grup diskusi tari seperti informasi ,
            event dan sanggar yang add
            </p>
          </div>

          <div class="col-sm-4">
            <h4><strong>Pusat informasi tari di indonesia</strong></h4>
            <img src="dist/img/icon-info.png"><br>
            <p>Kami menyediakan informasi yang tari, dari ensklopedia tari,
            informasi sanggar terdekat, acara acara yang sedang berlangsung
            sampai dengan pemesanan tiket pementasan tari</p>
          </div>

          <div class="col-sm-4">
            <h4><strong>Membuka lapangan Pekerjaan</strong></h4>
            <img src="dist/img/icon-case.png"><br>
            <p>Terdapat fitur mengajar secara privat bagi guru tari</p>
          </div>

        </div>

      </div>
    </div>

    <div class="section2">
    <div class="inner">
      <div class="content">
        <h3 style="font-style:italic;">Event Tari</h3>
        <p class="sub">Event Tari dan Pemesanan Tiket</p><br>
        <div class="row">
          <div class="col-sm-4">
  <div class="box box-primary">
            <div class="box-header with-border">
            </div><!--Class 2 ditutup -->
            <div class="col-md-12"><!--Class 3-->
        <img class="gambarEvent"src="{{ URL::asset('img/tarilegong.jpg') }}" width="260px" style="margin:10px;"align="center">
      <article class="post post-large">
				<div class="post-date">
					<span class="day">04</span>
					  <span class="month">Mei</span>
							</div>
							  <a href="www.jkt48.com">Pentas: Legong Dance</a><br>
                  <small>Pertujukkan tari legong di Puri Saren</small>
                  <button type="button" class="btn btn-warning btn-lg btn-block"style="margin:5px;">Selengkapnya</button><br>
          </article>
                </div>
                  </div>
          </div>
@yield('content')
          <div class="col-sm-4">
   <div class="box box-primary">
            <div class="box-header with-border">
            </div><!--Class 2 ditutup -->
            <div class="col-md-12"><!--Class 3-->
        <img class="gambarEvent"src="{{ URL::asset('img/barongkeris.jpg') }}" width="260px" style="margin:10px;"align="center">
      <article class="post post-large">
				<div class="post-date">
					<span class="day">21</span>
					  <span class="month">Juni</span>
							</div>
							  <a href="www.jkt48.com">Pertunjukkan Barong & Keris</a><br>
                  <small>Lokasi pertunjukkan di Padang Tegal Kelod</small>
                  <button type="button" class="btn btn-warning btn-lg btn-block"style="margin:5px;">Selengkapnya</button><br>
          </article>
                </div>
                  </div>
          </div>

          <div class="col-sm-4">
  <div class="box box-primary">
            <div class="box-header with-border">
            </div><!--Class 2 ditutup -->
            <div class="col-md-12"><!--Class 3-->
        <img class="gambarEvent"src="{{ URL::asset('img/kecak.jpg') }}" width="260px" style="margin:10px;"align="center">
      <article class="post post-large">
				<div class="post-date">
					<span class="day">13</span>
					  <span class="month">Mei</span>
							</div>
							  <a href="www.jkt48.com">Kecak & Fire (Ramayana)</a><br>
                  <small>Lokasi pada Pura Dalem Ubud</small>
                  <button type="button" class="btn btn-warning btn-lg btn-block"style="margin:5px;">Selengkapnya</button><br>
          </article>
                </div>
                  </div>
          </div>

        </div>

      </div>
    </div>
</section>
</main>
    <footer class="footer1">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>Deskripsi</h3>
      <p>MariTari merupakan online platform penyedia informasi, grup
      , acara tari</p>
            </div>
     <div class="col-md-4">
       <h3></h3>
      <p>Di Kembangkan Oleh Tim Hoki Hoki Club</p>
            </div>
     <div class="col-md-4">
       <h3>Kontak Kami</h3>
      <p><strong>Alamat : </strong>Gedung BC ILKOM</p>
      <p><strong>No Telp: </strong>(0361) 27596</p>
      <p><strong>Email : </strong>hendrasatuan@gmail.com</p>
            </div>
          </div>
        </div>
    </footer>
  </div>

</body>
</html>
