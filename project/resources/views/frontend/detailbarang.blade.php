@extends('layouts.frontend')

@section('shopkonten')
<div class="single-product mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				
				<div class="single-product-img">
					<img src="{{asset('img/').'/'.$barangjual->gambar}}"/>
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-content">
					<h3>{{$barangjual->nama_barangjual}}</h3>
					<p class="single-product-pricing"><span>Per {{$barangjual->satuan}}</span> Rp {{$barangjual->harga_barang}}</p>
					<p>{{$barangjual->deskripsi}}</p>
					<div class="single-product-form">
						<form action="index.html">
							<input type="number" placeholder="0">
						</form>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						@foreach($katbarang as $k)
						<p><strong>Categories: </strong>{{$k->nama}}</p>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection