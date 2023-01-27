@extends ('layouts.frontend')

@section('gambar2')
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p>Fresh and Organic</p>
					<h1>Pedagang</h1>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('pedagang')
<div class="mt-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3>Daftar <span class="orange-text">Pedagang</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($pedagang as $pdg )
			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-team-item">
					<div class="product-image">
                        <a href="single-product.html">
                            <img src="{{asset('img/').'/'.$pdg->foto}}" height='300px'/>
                        </a>
                    </div>
					<h4>{{$pdg -> nama}}</h4><br><h5 style="text-transform:capitalize">{{$pdg->role}}</h5>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection