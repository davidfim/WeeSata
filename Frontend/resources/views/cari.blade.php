<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--  <meta http-equiv="refresh" content="1" >
-->
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
{{-- <!-- Bootstrap FontAwesome CSS -->
<link rel="stylesheet" href="{{ URL::asset('') }}font-awesome/css/font-awesome.min.css"> --}}


<title>Hello, world!</title>
</head>
<body>

	<header class="">
		<div class="header-container">
			<a href="{{ route('home') }}"><img src="{{ URL::asset('image/weesata.png') }}" alt="" style="height: 30px;"></a>
            <nav class="nav">
                <a class="link active" href="{{ route('wisata') }}">Wisata</a>
                <a class="link" href="/#about-us">Tentang Kami</a>
            </nav>
        </div>
	</header>

	<div class="container">
		<!-- <form class="form-inline float-right">
		      <input class="form-control mr-sm-2 width-100" type="search" placeholder="Cari berdasarkan nama tempat" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari Wisata</button>
	    </form> -->
	<!-- <div class="row">
		<div class="col-md-3">
	    	<label class="my-1 mr-2">Lokasi :</label>

	    </div>
	    <div class="col-md-3">
	      	 <label class="my-1 mr-2">Lokasi :</label>

	    </div>
	    <div class="col-md-3">
	      	 <label class="my-1 mr-2">Lokasi :</label>

	    </div>
	    <div class="col-md-3">

	    </div>
	</div> -->
    <form action="{{ route('cari') }}" method="post" class="my-3">
        {{ csrf_field() }}
	  <div class="row">
	    <div class="col-md-3">
	    	<label class="my-2 mr-2">Nama Tempat :</label>
	      	<input type="text" class="form-control" placeholder="Cari berdasarkan nama tempat" name="nama_tempat">
	    </div>
	    <div class="col-md-3">
	      	 <label class="my-2 mr-2">Kategori :</label>

              <select class="custom-select no-border-radius" id="inlineFormCustomSelectPref" name="jenis">
                <option value="" selected>Semua</option>
                <option value="Alam">Alam</option>
                <option value="Kuliner">Kuliner</option>
                <option value="Sejarah">Sejarah</option>
                <option value="Indoor">Indoor</option>
              </select>
	    </div>
	    <div class="col-md-3">
	      	 <label class="my-2 mr-2">Lokasi :</label>
	      	 <input type="text" class="form-control" placeholder="Cari berdasarkan lokasi" name="kota">
	    </div>
	    <div class="col-md-3 align-self-end">
	    	 <button type="submit" class="btn btn-primary btn-block">Cari Wisata</button>
	    </div>
	  </div>
	</form>

	<h3 class="my-1" style="padding-top: 15px !important">Menampilkan {{ $jumlah }} Wisata</h3>
    @if($jumlah == 0)
    <p><small class="text-muted">Cari kata kunci lain</small></p>
    @endif
    <div class="row">
        @foreach ($wisata as $wisata)
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card">
                    <!-- 239x200 -->
                    <img class="card-img-top" style="height: 112px !important" src="{{ $wisata->gambar->value }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{ $wisata->nama->value }}</h5>
                    <p class="card-text deskripsi"> {{ $wisata->deskripsi->value }}</p>
                    <p class="card-text"><small class="text-muted">{{ $wisata->jenis->value }}</small></p>
                    </div>

                <a href="/wisata/{{ $wisata->nama->value }}" class="btn btn-primary">Detail</a>

                </div>
            </div>

        @endforeach

	    </div>
	</div>

	{{-- <footer>
        <div class="container">
            &copy; Weesata, 2020
        </div>
    </footer> --}}

</body>
