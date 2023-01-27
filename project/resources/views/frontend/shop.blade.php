@extends('layouts.frontend')

@section('gambar2')
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p>Fresh and Organic</p>
					<h1>Shop</h1>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('shopkonten')
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center col-md-12">
            <div class="product-filters">
                <ul>
                    <li class="active" data-filter="*">All</li>
					@foreach($barangjuals as $bj) 
                    <li data-filter=".strawberry">{{$bj->nama}}</li>
					@endforeach
                </ul>
            </div>
        </div>
	</div>
	<div class="row product-lists">
		@foreach($barangjuals as $bj)
		<div class="col-lg-4 col-md-6 text-center strawberry">
			<div class="single-product-item">
				<div class="product-image">
					<a href="{{url('baranguser/detail/'.($bj->id))}}">
                        <img src="{{asset('img/').'/'.$bj->gambar}}" style='height:130px; width:100px'/>
                    </a>
				</div>
				<h3>{{$bj->nama_barangjual}}</h3>
				<p class="product-price"><span>Per {{$bj->satuan}}</span> {{$bj->harga_barang}}</p>
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