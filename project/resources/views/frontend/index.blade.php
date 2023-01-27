@extends('layouts.frontend')

@section('gambar') 
<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Marketplace</p>
								<h1>Pasar Tradisional</h1>
								<div class="hero-btns">
									<a href="{{route('baranguser')}}" class="boxed-btn">Shop Now</a>
									<a href="{{url('/about')}}" class="bordered-btn">About Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Fresh Everyday</p>
								<h1>Booking Now!</h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">Booking</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Dapatkan Barang Terbaik</p>
								<h1>Join Lelang Now!</h1>
								<div class="hero-btns">
									<a href="{{url('/lelanguser')}}" class="boxed-btn">Lelang</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
</div>
@endsection

@section('produkunggulan')
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
		    <div class="section-title">	
                <h3><span class="orange-text">Produk</span> Unggulan</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
			<div class="single-product-item">
				<div class="product-image">
					<a href="single-product.html">
                        <img src="{{asset('fruit/img/products/wortel.jpg')}}">
                    </a>
				</div>
				<h3>Wortel</h3>
				<p class="product-price"><span>Per Kg</span> 85$ </p>
				<a href="{{route('baranguser')}}" class="cart-btn">
                    Shop
                </a>
			</div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
			<div class="single-product-item">
				<div class="product-image">
					<a href="single-product.html">
                        <img src="{{asset('fruit/img/products/beras.jpg')}}">
                    </a>
				</div>
				<h3>Beras</h3>
				<p class="product-price"><span>Per Kg</span> 85$ </p>
				<a href="cart.html" class="cart-btn">
                     Shop
                </a>
			</div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
			<div class="single-product-item">
				<div class="product-image">
					<a href="single-product.html">
                        <img src="{{asset('fruit/img/products/bawangmerah.jpg')}}">
                    </a>
				</div>
				<h3>Bawang Merah</h3>
				<p class="product-price"><span>Per Kg</span> 85$ </p>
				<a href="cart.html" class="cart-btn">
                    Shop
                </a>
			</div>
        </div>
    </div>
</div>
@endsection

@section('banner')
<section class="shop-banner">
    	<div class="container">
        	<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
        </div>
</section>
@endsection

@section('testimonial')
<div class="testimonail-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="testimonial-sliders">
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="{{asset('fruit/img/avaters/avatar1.png')}}" alt="">
						</div>
						<div class="client-meta">
							<h3>Saira Hakim <span>Local shop owner</span></h3>
							<p class="testimonial-body">
								" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="{{asset('fruit/img/avaters/avatar2.png')}}" alt="">
						</div>
						<div class="client-meta">
							<h3>David Niph <span>Local shop owner</span></h3>
							<p class="testimonial-body">
								" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="{{asset('fruit/img/avaters/avatar3.png')}}">
						</div>
						<div class="client-meta">
							<h3>Jacob Sikim <span>Local shop owner</span></h3>
							<p class="testimonial-body">
								" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('news')
<div class="latest-news pt-150 pb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">	
					<h3><span class="orange-text">Our</span> News</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-latest-news">
					<a href="single-news.html">
                        <div class="latest-news-bg news-bg-1"></div>
                    </a>
					<div class="news-text-box">
						<h3><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></h3>
						<p class="blog-meta">
							<span class="author"><i class="fas fa-user"></i> Admin</span>
							<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
						</p>
						<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
						<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
				    </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-latest-news">
					<a href="single-news.html">
                        <div class="latest-news-bg news-bg-2"></div>
                    </a>
					<div class="news-text-box">
						<h3><a href="single-news.html">A man's worth has its season, like tomato.</a></h3>
						<p class="blog-meta">
							<span class="author"><i class="fas fa-user"></i> Admin</span>
							<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
						</p>
						<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
						<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
				<div class="single-latest-news">
					<a href="single-news.html">
                        <div class="latest-news-bg news-bg-3"></div>
                    </a>
					<div class="news-text-box">
						<h3><a href="single-news.html">Good thoughts bear good fresh juicy fruit.</a></h3>
						<p class="blog-meta">
							<span class="author"><i class="fas fa-user"></i> Admin</span>
							<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
						</p>
						<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
						<a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class=" col-lg-12 text-center">
				<a href="news.html" class="boxed-btn">More News</a>
			</div>
		</div>
	</div>
</div>
@endsection