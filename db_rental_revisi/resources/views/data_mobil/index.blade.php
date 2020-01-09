@extends('layouts.index')
@section('content')

<!-- DataTales Example -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

<link rel="stylesheet" href="{{asset('css/aos.css')}}">

<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">


<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<section class="ftco-section ftco-cart">
<a href="/pegawai/exportpdf" class="btn btn-sm btn-primary">Export</a>
		<div id="pricing" class="row">
			<div class="col-md-12 ftco-animate">
				<div>
					<table class="table">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th class="bg-primary heading">12 Jam</th>
								<th class="bg-dark heading">1 Hari</th>
							</tr>
						</thead>
						<tbody>
							@foreach($ar_mobil as $mob)
							<tr class="">
								<td class="car-image"><div class="img" style="background-image:url(images/car-1.jpg);"></div></td>
								<td class="product-name">
									<h3>{{ $mob->nama }}</h3>
									<p class="mb-0 rated">
										<span><a href="{{ route('data_mobil.show' , $mob->id)}}">Detail</a></span>

									</p>
								</td>

								<td class="price">
									<p class="btn-custom"><a href="#">Rent a car</a></p>
									<div class="price-rate">
										<h3>
											<span class="num"><small class="currency"></small>{{ $mob->harga_half }}</span>
											<span class="per">/per 12 jam</span>
										</h3>
									</div>
								</td>

								<td class="price">
									<p class="btn-custom"><a href="#">Rent a car</a></p>
									<div class="price-rate">
										<h3>
											<span class="num"><small class="currency"></small>{{ $mob->harga_full }}</span>
											<span class="per">/per hari</span>
										</h3>
									</div>
								</td>
							</tr><!-- END TR-->	
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

</section>

<!-- loader -->


<<!-- script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
 -->
</body>
<!-- /.container-fluid -->
@endsection