
<table border="1" align="center">
	<thead>
		<tr align="center">
			<th>Nama</th>
			<th>Plat</th>
			<th>Tahun</th>
			<th>Harga 1/2 Hari</th>
			<th>Harga 1 Hari</th>
			<th>Ketersediaan</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data_mobil as $mob)
		<tr align="center">
			<td>{{ $mob->nama }}</td>
			<td>{{ $mob->plat }}</td>
			<td>{{ $mob->tahun }}</td>
			<td>{{ $mob->harga_half }}</td>
			<td>{{ $mob->harga_full }}</td>
			<td>{{ $mob->status }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</center>