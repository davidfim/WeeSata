<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <!--  <meta http-equiv="refresh" content="1" >
 -->
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    {{-- <!-- Bootstrap FontAwesome CSS -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> --}}


    <title>Hello, world!</title>
  </head>
  <body>
    <section class="header">
    	<div class="container-fluid">
          <a href=""><img src="{{ URL::asset('image/logo.png') }}" alt="" style="height: 50px; position: absolute; top: 11px;"></a>
            <nav class="nav align-self-center">
                <a class="nav-link" href="{{ route('wisata') }}">Wisata</a>
                <a class="nav-link mr-0" href="#about-us">Tentang Kami</a>
            </nav>

			<!-- <button type="button" class="link-btn" id="about-us">Tentang Kami</button>  -->

    	</div>
    	<h1>
    		Selamat Datang di Weesata!
    	</h1>
    	<p>Cari tempat wisata di Jawa Barat favorit kamu disini</p>

		<!-- <div class="container-fluid search-container"> -->
        <form action="{{ route('cari') }}" method="post" class="form-container">
        {{ csrf_field() }}
            <div class="input-group">
                <div class="col no-padding">
                    <label class="my-1 mr-2" >Nama Tempat :</label>
                    <input type="text" class="form-control" placeholder="Misal : Gunung" name="nama_tempat">
                </div>
            </div>

            <div class="input-group space padding-top-15">
                <div class="col no-padding padding-right-15">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori :</label>
                      <select class="custom-select border-radius" id="inlineFormCustomSelectPref" name="jenis">
                        <option selected value="">Semua</option>
                        <option value="Wisata Alam">Alam</option>
                        <option value="Wisata Kuliner">Kuliner</option>
                        <option value="Wisata Sejarah">Sejarah</option>
                        <option value="Wisata Indoor">Indoor</option>
                      </select>
                </div>
                <div class="col no-padding padding-left-15">
                    <label class="my-1 mr-2">Lokasi :</label>
                    <input type="text" class="form-control" placeholder="Misal : Bandung" name="kota">
                </div>
            </div>
           <!--  <div class="input-group form-group padding-top-15">
                <label for="formControlRange">Harga :</label>
                <input type="range" class="form-control-range" id="formControlRange">
            </div> -->
           <!--  <div class="input-group">
                <div class="col no-padding">
                   <button class="btn" type="submit" id="button-addon2">Cari</button>
                </div>
            </div>
 -->
            <div class="input-group">
                <div class="col no-padding padding-top-15">
                     <button type="submit" class="btn btn-custom">Cari Wisata</button>
                </div>
            </div>


           <!--  <div class="">
                <button class="btn" type="submit" id="button-addon2">Cari</button>
            </div>   -->
        </form>

		<!-- </div> -->

        <!-- <button class="btn"><i class="fa fa-chevron-down" aria-hidden="true"></i></button> -->

    </section>

    <section id="about-us">
        <div class="container">
            <h2 class="text-center my-4">Tentang Kami</h2>
            <div class="card-deck">
                  <div class="card">
                    <img class="card-img-top" src="{{ URL::asset('image/junia.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Junia Adhani</h5>
                      <p class="card-text">Mahasiswa Universitas Padjadjaran jurusan Teknik Informatika (140810170015).</p>
                      <p class="card-text"><small class="text-muted">Database SPARQL</small></p>
                    </div>
                     </div>
                  <div class="card">
                    <!-- 239x200 -->
                    <img class="card-img-top" src="{{ URL::asset('image/syaina.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Syaina Nur Fauziyah</h5>
                      <p class="card-text">Mahasiswa Universitas Padjadjaran jurusan Teknik Informatika (140810170025).</p>
                      <p class="card-text"><small class="text-muted">Front-End</small></p>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="{{ URL::asset('image/david.jpg') }}" alt="Card image cap">
                    <div class="card-body" style="padding-bottom: 0 !important">
                      <h5 class="card-title">David Ferdinand I. M.</h5>
                      <p class="card-text">Mahasiswa Universitas Padjadjaran jurusan Teknik Informatika (140810170039).</p>
                      <p class="card-text"><small class="text-muted">Back-End</small></p>
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            &copy; Weesata, 2020
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>

    {{-- <script src="{{ URL::asset('js/js.js') }}"></script>
    <script type="text/javascript">
            var token = '{{ csrf_token() }}';
            console.log(token);
    </script> --}}

    <script>
        // CSRF for all ajax call
        //$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': '<?php echo csrf_token() ?>'
        }
    });
    </script>
</html>
