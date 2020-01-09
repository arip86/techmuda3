<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/data_mobil"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/data_mobil/store" method="POST">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Plat <input type="text" name="plat" required="required"> <br/>
		Tahun <input type="number" name="tahun" required="required"> <br/>
		harga 1/2 <input type="number" name="harga_half" required="required"></textarea> <br/>
		harga 1 <input type="number" name="harga_full" required="required"> <br/>
		status
		@php
		$ar_status = ['ada','dipinjam'];
		@endphp
		@foreach ($ar_status as $s) 
		<input type="radio" name="status" required="required" value="{{ $s }}">{{ $s }}
		@endforeach
		<br/>
		foto <input type="text" name="foto" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>