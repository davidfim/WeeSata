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
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> --}}


<title>Hello, world!</title>
</head>
<body>

	<header class="">
		<div class="header-container">
			<a href=""><img src="{{ URL::asset('image/weesata.png') }}" alt="" style="height: 30px;"></a>
            <nav class="nav">
                <a class="link" href="{{ route('wisata') }}">Wisata</a>
                <a class="link" href="/#about-us">Tentang Kami</a>
            </nav>
        </div>
	</header>

	<div class="container">
		<div class="row">
	  <div class="leftcolumn">
	    <div class="card">
	      <h2 class="my-1">{{ $tempat['nama']['value'] }}</h2>
	       <p><small class="text-muted">{{ $tempat['jenis']['value'] }}, {{ $tempat['kota']['value'] }}</small></p>
	      <img class="card-img-top h-100" src="{{ $tempat['gambar']['value'] }}" alt="Card image cap">
	      <p class="my-3 card-text">{{ $tempat['deskripsi']['value'] }}</p>

	      <table>
	      	<tr>
	      		<td>Lokasi</td>
	      		<td>:</td>
	      		<td>{{ $tempat['kota']['value'] }}</td>
	      	</tr>
	      	<tr>
	      		<td style="width: 10%">Tempat</td>
	      		<td>:</td>
	      		<td>{{ $tempat['lokasi']['value'] }}</td>
	      	</tr>

	      	<tr>
	      		<td style="width: 10%">Jam Buka</td>
	      		<td>:</td>
	      		<td>{{ $tempat['hari']['value'] }}, {{ $tempat['jam']['value'] }}</td>
	      	</tr>

	      	<tr>
	      		<td style="width: 15%">Harga Masuk</td>
	      		<td>:</td>
	      		<td>{{ $tempat['harga']['value'] }}</td>
	      	</tr>
	      </table>
	    </div>

	  </div>
	  <!-- <div class="rightcolumn">
	    <div class="card">
	      <h2>About Me</h2>
	      <div class="fakeimg" style="height:100px;">Image</div>
	      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
	    </div>
	    <div class="card">
	      <h3>Popular Post</h3>
	      <div class="fakeimg">Image</div><br>
	      <div class="fakeimg">Image</div><br>
	      <div class="fakeimg">Image</div>
	    </div>
	    <div class="card">
	      <h3>Follow Me</h3>
	      <p>Some text..</p>
	    </div>
	  </div> -->
	</div>
	</div>

	 <footer>
        <div class="container">
            &copy; Weesata, 2020
        </div>
    </footer>

</body>


