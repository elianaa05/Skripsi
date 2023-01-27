@extends('layouts.frontend')

@section('gambar2')
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p>Fresh and Organic</p>
					<h1>Lelang</h1>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('shopkonten')
<div class="container">
	<div class="row product-lists">
		@foreach($lelanguser as $lu)
		<div class="col-lg-4 col-md-6 text-center strawberry">
			<div class="single-product-item">
				<div class="product-image">
					<a href="">
                        <img src="{{asset('img/').'/'.$lu->gambar}}" style='height:130px; width:100px'/>
                    </a>
				</div>
				<h3>{{$lu->nama_barang}}</h3>
				<p class="product-price"><span>{{$lu->jumlah_barang}} {{$lu->satuan}}</span></p>
				<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukkan Keranjang</a><br><br>
				<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Belanja</a>
			</div>
		</div>
		@endforeach
	</div>
	<div class="row">
		<div class="col-lg-12 text-center">
			<div class="pagination-wrap">
				<ul>
					<li><a href="#">Prev</a></li>
					<li><a href="#">1</a></li>
					<li><a class="active" href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection