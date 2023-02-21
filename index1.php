<?php
//Mengirimkan Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <!-- Csrf Token -->
<meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
  <meta charset="utf-8" />
  <meta name="theme-color" content="#BC8887" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Undangan Pernikahan Ma'mun & Nuraeni</title>

  <meta property="og:title" content="Undangan Pernikahan Nuraeni & Ma'mun - Minggu, 05 Maret 2023">
  <meta property="og:description"
    content="Undangan Pernikahan Nuraeni & Ma'mun - Minggu, 05 Maret 2023 di Kediaman Mempelai Wanita">
  <meta property="og:locale" content="id_ID" />
  <meta property="og:image" content="https://sherly.dae.ng/image/sherly-daeng-wedding-thumbnail.png">
  <meta property="og:url" content="http://sherly.dae.ng/index.html">
  <meta name="twitter:card" content="summary_large_image">
  <!-- Bulma Version 0.8.x-->
  <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/bulma-tooltip@0.1.5/dist/bulma-tooltip.min.css" />
  <link rel="stylesheet" type="text/css" href="css/menikah.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://kit.fontawesome.com/2828f7885a.js"
    integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery.coundown.js"></script>
  <link rel="icon" type="image/png" href="image/favicon.png" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23064379-20"></script>
  <!-- Begin Script for Countdown -->
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23064379-20');
  </script>
  <!-- Begin Script for Countdown -->

  <!-- Github Button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
  <!-- open undangan -->
  <div id="overlay">
			<div class="content">
				<div class="container">
					<div class="row">
						<div
							class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box fadeInUp animated-fast">
							<!-- <img src="image/cover.jpg" alt="" class="couple-main"> -->
						</div> 
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
							<h1>Nuraeni</h1>
							<h1>&</h1>
							<h1>Ma'mun</h1>
							<p style="margin-bottom: 0">Kepada Bapak/Ibu/Saudara/i/kerabat</p>
							<p>Kami Mengundang Anda Untuk Hadir Di Acara Pernikahan Kami.</p>

							<button class="btn btn-primary" id="open-invitation">Buka Undangan</button>
						</div>
					</div>
				</div>
			</div>
		</div>
  <!-- end -->
  <!-- Begin Preloader -->
  <div class="preloader-wrapper">
    <div class="preloader">
      <img src="image/favicon.png" alt="Flower" />
    </div>
  </div>
  <!-- End Preloader-->
  <!-- Begin Header -->
  <div class="header-wrapper" id="home">
    <!-- Begin Hero -->
    <section class="hero is-large">
      <!-- Begin Mobile Nav -->
      <nav class="navbar is-transparent is-hidden-desktop">
        <!-- Begin Burger Menu -->
        <div class="navbar-brand is-fixed-top">
          <div class="navbar-burger burger" data-target="mobile-nav">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <!-- End Burger Menu -->
        <div id="mobile-nav" class="navbar-menu">
          <div class="navbar-end">
            <div class="navbar-item">
              <a class="navbar-item" href="#Waktu">
                Waktu
              </a>
            </div>
            <div class="navbar-item">
              <a class="navbar-item" href="#lokasi">
                Lokasi
              </a>
            </div>

            <div class="navbar-item">
              <a class="navbar-item" href="#tentang-sherly-daeng">
                Tentang Nuraeni & Ma'mun
              </a>
            </div>
            <div class="navbar-item">
              <a class="navbar-item" href="#rsvp">
                RSVP
              </a>
            </div>
          </div>
        </div>
      </nav>
      <!-- End Mobile Nav -->
      <!-- Begin Hero Content-->
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="subtitle">Undangan Pernikahan</h1>
          <h2 class="title">Nuraeni & Ma'mun</h2>
          <h4 class="subtitle tempatwaktu">

            Minggu, 05 Maret 2023
            </br>
            Kp. Solear
            </br>
            Kediaman Mempelai Wanita

          </h4>
        </div>
        <!-- Start Countdown -->
        <div>
          <ul id="hitungmundur">
            <li><span class="days">00</span>
              <p class="days_text">Hari</p>
            </li>
            <li class="separator">:</li>
            <li><span class="hours">00</span>
              <p class="hours_text">Jam</p>
            </li>
            <li class="separator">:</li>
            <li><span class="minutes">00</span>
              <p class="minutes_text">Menit</p>
            </li>
            <li class="separator">:</li>
            <li><span class="seconds">00</span>
              <p class="seconds_text">Detik</p>
            </li>
          </ul>
          <div class="spasi">
          </div>
          <script type="text/javascript">
            var now = new Date();
            var day = now.getDate();
            var month = now.getMonth() + 1;
            var year = now.getFullYear() + 1;

            var nextyear = month + '/' + day + '/' + year + ' 07:07:07';
            var harih = '03/05/2023 09:00:00';

            $('#hitungmundur').countdown({
              date: harih, // TODO Date format: 07/27/2017 17:00:00
              offset: +7, // TODO Your Timezone Offset
              day: 'Hari',
              days: 'Hari'
            }, function () {
              alert('Done!');
            });

            $('#open-invitation').click(function () {
			$('#overlay').addClass('hide-overlay');
			playAudio1();
			/*yang bagian floating button ada animasinya tapi karena ketutup dulu sama overlay jadinya gak nampak*/
			/*pengen pas di klik buka undangan baru jalan animasinya*/
			/*var c = document.getElementsByClassName('right-sidebar');
			for (var i = 0; i < c.length; i++) {
				c[i].classList.add('animate');
			}*/
		});
          </script>
        </div>
        <!-- End Countdown -->
      </div>

      <!-- End Hero Content-->
      <!-- Begin Hero Menu -->
      <!-- <div class="hero-foot ">
        <div class="hero-foot--wrapper">
          <div class="columns">
            <div class="column is-12 hero-menu-desktop has-text-centered">
              <ul>
                <li class="is-active">
                  <a href="#home">Home</a>
                </li>
                <li>
                  <a href="#Waktu">Waktu</a>
                </li>
                <li>
                  <a href="#lokasi">Lokasi</a>
                </li>
                <li>
                  <a href="#tentang-sherly-daeng">Tentang Syukron & Nuraeni</a>
                </li>

                <li>
                  <a href="#rsvp">RSVP</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End Hero Menu -->
    </section>
    <!-- End Hero -->
  </div>
  <!-- End Header -->

  <!-- Begin Main Content -->
  <div class="main-content">
    <!-- Begin regular-section-->
    <!-- Begin Waktu Section -->
    <section class="section-dark" id="Waktu">
      <div class="container">

        <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
          <h1 class="title has-text-centered section-title">Save The Date</h1>
        </div>
        <div class="columns is-multiline" data-aos="fade-up" data-aos-easing="linear">
          <div class="column is-6 has-vertically-aligned-content">

            <p class="is-larger has-text-centered">
              <div class="waktu tanggal-hari has-text-centered">Sabtu</div>
              <div class="waktu tanggal-angka has-text-centered">04</div>
              <div class="waktu tanggal-bulan has-text-centered">Maret 2023</div>
            </p>

          </div>
          <div class="column is-6 has-vertically-aligned-content">

            <p class="waktu is-larger has-text-centered">
              Akad Nikah:
              <br>
              21.00 WIB s/d Selesai
            </p>

          </div>
        </div>
        <div class="columns is-multiline" data-aos="fade-up" data-aos-easing="linear">
          <div class="column is-6 has-vertically-aligned-content">

            <p class="is-larger has-text-centered">
              <div class="waktu tanggal-hari has-text-centered">Minggu</div>
              <div class="waktu tanggal-angka has-text-centered">05</div>
              <div class="waktu tanggal-bulan has-text-centered">Maret 2023</div>
            </p>

          </div>
          <div class="column is-6 has-vertically-aligned-content">

            <p class="waktu is-larger has-text-centered">
              Resepsi:
              <br>
              09.00 WIB s/d Selesai
            </p>

          </div>
        </div>
      </div>
      <div class="space40px"></div>
      <div class="main-content has-text-centered" data-aos="fade-up" data-aos-easing="linear">
        <a href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=NGgzdW00NG84dXFwMzcwNXYxbGliNGxzaWggZGFlbmdkb2FuZ0Bt&amp;tmsrc=daengdoang%40gmail.com"
          target="_blank" class="button has-tooltip btn-cta" data-tooltip="Add to Calendar" target="_blank"
          data-aos="zoom-in">
          <i class="far fa-calendar-plus"></i>
          &nbsp;&nbsp;Google Calendar
        </a>
      </div>
    </section>
    <!-- End Waktu Content -->
    <!-- foto -->
    <section class="section-light regular-section is-fullheight" id="tentang-sherly-daeng">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column has-text-centered is-12 prolog">
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear"></h1>


            <!-- IMAGES -->
            <div class=" tile">
              <div class="tile is-ancestor">
                <div class="tile is-parent">
                  <article class="tile is-child foto10 notification foto10" data-aos="fade-up" data-aos-easing="linear">
                  </article>
                  <div class="content">
                    <h5>Nuraeni/Neng</h5>
                    <p>Putri Ketiga Dari Bapak Supyani & Ibu Nuryanah</p>
                    <a href="https://instagram.com/nur.aeni23_?igshid=YmMyMTA2M2Y=" class="button btn-instagram"
                      target="_blank" data-aos="zoom-in">
                      <i class="fab fa-instagram"></i>
                      &nbsp;&nbsp;@nur.aeni23
                    </a>
                  </div>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification foto" data-aos="fade-up" data-aos-easing="linear">
                  </article>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification foto11" data-aos="fade-up" data-aos-easing="linear">
                  </article>
                  <div class="content">
                    <h5>Syukron Ma'mun Al Baejuri/Ma'mun</h5>
                    <p>Putra Pertama Bapak Suryadi & Ibu Siti Hamilah</p>
                    <a href="https://instagram.com/mamunalbi?igshid=YmMyMTA2M2Y=" class="button btn-instagram"
                      target="_blank" data-aos="zoom-in">
                      <i class="fab fa-instagram"></i>
                      &nbsp;&nbsp;@mamunalbi
                    </a>
                  </div>
                </div>
                <!-- IMAGES -->
                <div class="space40px"></div>
                <div data-aos="fade-up" data-aos-easing="linear">
                  <img src="image/divider-leaves.png" class="divider has-vertically-align" alt="~~~">
                </div>
                <div class="space40px"></div>
                <div class="space40px"></div>

              </div>
            </div>
    </section>
    <!-- end foto -->

    <!-- Begin Lokasi Section -->
    <section class="section-darker" id="lokasi">
      <div class="container">
        <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
          <h1 class="title has-text-centered section-title">Lokasi</h1>
          <p class="tempat is-larger has-text-centered">
            <strong>Kediaman Mempelai Wanita</strong>
            <br>
            Kp. Solear RT. 022 RW. 07 Ds. Carenang,
            <br>
            Kec. Cisoka Kab. Tangerang - Banten
            <br>
          </p>
        </div>
        <div class="section-map" data-aos="fade-up" data-aos-easing="linear">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3965.9249098323507!2d106.38774861476945!3d-6.273604195459205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTYnMjUuMCJTIDEwNsKwMjMnMjMuOCJF!5e0!3m2!1sid!2sid!4v1676746604337!5m2!1sid!2sid"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="space40px"></div>
        <div class="has-text-centered" data-aos="fade-up" data-aos-easing="linear">
          <a href="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3965.9249098323507!2d106.38774861476945!3d-6.273604195459205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTYnMjUuMCJTIDEwNsKwMjMnMjMuOCJF!5e0!3m2!1sid!2sid!4v1676746604337!5m2!1sid!2sid"
            class="button btn-cta" target="_blank" data-aos="zoom-in">
            <i class="far fa-directions"></i>
            &nbsp;&nbsp;Google Maps
          </a>
        </div>
      </div>
    </section>
    <!-- End Lokasi Content -->

    <!-- Begin Tentang nuraeni dan syukron -->
    <section class="section-light regular-section is-fullheight" id="tentang-sherly-daeng">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column has-text-centered is-12 prolog">
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">GALERI FOTO
            </h1>


            <!-- IMAGES -->
            <div class=" tile">
              <div class="tile is-ancestor">
                <div class="tile is-parent">
                  <article class="tile is-child foto1 notification foto1" data-aos="fade-up" data-aos-easing="linear">
                    <div class="content">
                      <p class="title-foto"></p>
                      <p class="subtitle-foto"><a href="https://cashbac.com" target="_blank"></a>
                      </p>
                    </div>
                  </article>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification foto2" data-aos="fade-up" data-aos-easing="linear">
                    <div class="content">
                      <p class="title-foto">
                      </p>
                      <p class="subtitle-foto">

                      </p>
                    </div>
                  </article>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification foto3" data-aos="fade-up" data-aos-easing="linear">
                    <div class="content">
                      <p class="title-foto">
                      </p>
                      <p class="subtitle-foto">
                      </p>
                    </div>
                  </article>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification foto8" data-aos="fade-up" data-aos-easing="linear">
                    <div class="content">
                      <p class="title-foto">
                      </p>
                      <p class="subtitle-foto">
                      </p>
                    </div>
                  </article>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification foto9" data-aos="fade-up" data-aos-easing="linear">
                    <div class="content">
                      <p class="title-foto">
                      </p>
                      <p class="subtitle-foto">
                      </p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="space24px"></div>
            <div class="tile is-ancestor">
              <div class="tile is-parent">
                <article class="tile is-child notification foto6" data-aos="fade-up" data-aos-easing="linear">
                  <div class="content">
                    <p class="title-foto"></p>
                    <p class="subtitle-foto"></p>
                  </div>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child notification foto4" data-aos="fade-up" data-aos-easing="linear">
                  <div class="content">
                    <p class="title-foto"></p>
                    <p class="subtitle-foto"></p>
                  </div>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child notification foto5" data-aos="fade-up" data-aos-easing="linear">
                  <div class="content">
                    <p class="title-foto"></p>
                    <p class="subtitle-foto"></p>
                  </div>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child notification foto7" data-aos="fade-up" data-aos-easing="linear">
                  <div class="content">
                    <p class="title-foto"></p>
                    <p class="subtitle-foto"></p>
                  </div>
                </article>
              </div>
            </div>
            <!-- IMAGES -->
            <div class="space40px"></div>
            <div data-aos="fade-up" data-aos-easing="linear">
              <img src="image/divider-leaves.png" class="divider has-vertically-align" alt="~~~">
            </div>
            <div class="space40px"></div>
            <div class="space40px"></div>

          </div>
        </div>
    </section>
    <!-- End Tentang nuraeni dan syukron -->
    <!-- amplop digital -->
    <section id="eskul">
      <div class="container">
        <div class="section-title">
          <h2>AMPLOP DIGITAL</h2>
        </div>
        <div class="eskul">
          <img src="image/17.jpg" alt="">
          <div class="nama">No Rekening 6001471862</div>
          <div class="nama">a/n Nuraeni</div>
        </div>
        <div class="eskul">
          <img src="image/16.png" alt="">
          <div class="nama">0838-1383-2724</div>
          <div class="nama">a/n Nuraeni</div>
        </div>
        <div class="eskul">
          <img src="image/15.jpg" alt="">
          <div class="nama">No Rekening 7111537601</div>
          <div class="nama">A/n Syukron Ma'mun Al baejuri</div>
        </div>
    </section>
    <!-- end -->
    <!-- Begin RSVP Content -->
    <section class="section-dark contact" id="rsvp">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column is-12 prolog">
            <h1 class="title has-text-centered section-title" data-aos="fade-up" data-aos-easing="linear">Konfirmasi
              Kehadiran</h1>
          </div>
          <div class="column is-12 prolog has-text-centered" data-aos="fade-up" data-aos-easing="linear">
            <p class="h2 subtitle">
              Merupakan suatu kehormatan dan kebahagiaan bagi kami
              <br>
              apabila Bapak/Ibu/Saudara/Saudari berkenan hadir
              memberikan doa restu.
              <br>
              <br>
              Jika bisa hadir kami tunggu konfirmasinya,
              <br>
              Informasi: Di meja penerima tamu akan kami sediakan hand sanitizer dan pemeriksaan suhu tubuh.
              <br>
              <br>
              Jika tidak memungkinkan untuk hadir di pernikahan kami,tidak mengapa,
              <br>
              semoga bisa berjumpa di lain kesempatan
              <br>
              <br>
              Stay safe & jaga kesehatan ya :)
            </p>

            <a href="https://api.whatsapp.com/send?phone=6283813832724&text=Halo%20Nuraeni,%20saya%20akan%20datang%20di%20acara%20pernikahan&source=&data="
              class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
              <i class="fab fa-whatsapp"></i>
              &nbsp;&nbsp;Kabari Nuraeni
            </a>



            <a href="https://api.whatsapp.com/send?phone=6283892321649&text=Halo%20Ma'mun,%20saya%20akan%20datang%20di%20acara%20pernikahan&source=&data="
              class="button btn-whatsapp" target="_blank" data-aos="zoom-in">
              <i class="fab fa-whatsapp"></i>
              &nbsp;&nbsp; Kabari Mam'mun
            </a>
            <div class="space40px"></div>

            <div class="space40px"></div>
            <div data-aos="fade-up" data-aos-easing="linear">
              <img src="image/divider-leaves.png" class="divider has-text-centered" alt="~~~">
            </div>
            <div class="space40px"></div>
            <p class="h2 subtitle" data-aos="fade-up" data-aos-easing="linear">
              Kami yang berbahagia,
              <br>
              <a class="instagram" :" href="https://instagram.com/nur.aeni23_?igshid=YmMyMTA2M2Y=" target="_blank"
                alt="Instagram Sherly">
                <i class="fab fa-instagram"></i> @Nuraeni
              </a>
              &nbsp
              <a class="instagram" href="https://instagram.com/mamunalbi?igshid=YmMyMTA2M2Y=" target="_blank"
                alt="Instagram Daeng">
                <i class="fab fa-instagram"></i> @Ma'mun
              </a>
            </p>

          </div>

        </div>
      </div>
    </section>
    <!-- End RSVP Content -->
  </div>
  <!-- End Main Content -->
  <!-- star php -->
	<div class="container mb-3">
		<h2 align="center" style="margin: 60px 10px 10px 10px; font-size: 25px; font-family: sans-serif:">WEDDING WISH</h2><hr>
		<h2 align="center" style="margin: 5px;">Kirimkan doa & Ucapan Kepada Kedua Mempelai</h2><hr>
		<form method="POST" id="form_komen">
			<div class="form-group">
				<input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="Masukkan Nama" />
			</div>
			<div class="form-group">
				<textarea name="komen" id="komen" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
			</div>
			<div class="form-group">
				<input type="hidden" name="komentar_id" id="komentar_id" value="0" />
				<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
			</div>
		</form>
		<hr>
		<h4 class="mb-3">Komentar :</h4>
		<span id="message"></span>
	   
	   	<div id="display_comment"></div>
	</div>

			</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			//Mengirimkan Token Keamanan
			$.ajaxSetup({
	            headers : {
	                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
	            }
	        });
        
			$('#form_komen').on('submit', function(event){
				event.preventDefault();
				var form_data = $(this).serialize();
				$.ajax({
					url:"tambah_komentar.php",
					method:"POST",
					data:form_data,
					success:function(data){
						$('#form_komen')[0].reset();
						$('#komentar_id').val('0');
						load_comment();
					}, error: function(data) {
		            	console.log(data.responseText)
		            }
				})
			});

			load_comment();

			function load_comment(){
				$.ajax({
					url:"ambil_komentar.php",
					method:"POST",
					success:function(data){
						$('#display_comment').html(data);
					}, error: function(data) {
		            	console.log(data.responseText)
		            }
				})
			}

			$(document).on('click', '.reply', function(){
				var komentar_id = $(this).attr("id");
				$('#komentar_id').val(komentar_id);
				$('#nama_pengirim').focus();
			});
		});
	</script>
<!-- end php -->


  <!-- Begin Footer -->
  <div class="footer">
    <div class="container">
      <audio controls autoplay>
        <source src="image/wish.mp3" type="audio/mp3">
      </audio>
      <a href="https://github.com/daengdoang/daeng-sherly-menikah" class="has-vertically-align">
        <p class="has-vertically-align"></p>
      </a>
      <a href="https://bulma.io" class="has-vertically-align">

      </a>
      <a href="https://www.netlify.com">

      </a>
    </div>
  </div>
  <!-- End Footer -->

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/menikah.js"></script>
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script>
    AOS.init({
      easing: "ease-out",
      duration: 800,
    });
  </script>
</body>

</html>