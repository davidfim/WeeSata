<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/searchbykondisi" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" > <br/>
		Jenis <input type="text" name="jenis" > <br/>
		Kota <input type="text" name="kota" > <br/>
		<input type="submit" value="Simpan Data">
	</form>
    <form action="/searchbykondisi" method="post" class="form-container">
            {{ csrf_field() }}
            <div class="input-group">
                <div class="col no-padding">
                    <label class="my-1 mr-2" >Nama Tempat :</label>
                    <input type="text" class="form-control" placeholder="Misal : Gunung" name="nama">
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
            <input type="hidden" name="_token" value="g7d0oQkYRCIm1FGloFGwf8kXwdnNINu5JowPoV0f">
        
            <div class="input-group">
                <div class="col no-padding padding-top-15">
                     <button type="submit" class="btn btn-custom">Cari Wisata</button>
                </div>
            </div>

        </form>
 
</body>
</html>