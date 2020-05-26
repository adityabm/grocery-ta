@extends('layouts.app')

@section('content')
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span
                    class="mdi mdi-chevron-right"></span> <a href="{{url('bahan-masakan')}}">Product</a> <span
                    class="mdi mdi-chevron-right"></span> <a href="#">{{$produk->nama}}</a>
            </div>
        </div>
    </div>
</section>
<section class="shop-single section-padding pt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="shop-detail-left">
                    <div class="shop-detail-slider">
                        <div id="sync1" class="owl-carousel">
                            <div class="item"><img alt="" src="{{asset('storage/'.$produk->foto)}}" class="img-fluid img-center w-100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shop-detail-right">
                    <h2>{{$produk->nama}}</h2>
                    <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - {{$produk->stok}} {{$produk->satuan}}</h6>
                    <p class="regular-price">Rp {{number_format($produk->harga)}}</p>
                    <a href="checkout.html"><button type="button" class="btn btn-secondary btn-lg"><i
                                class="mdi mdi-cart-outline"></i> Add To Cart</button> </a>
                    <div class="short-description">
                        <h5>
                            Quick Overview
                            <p class="float-right">Availability: <span class="badge badge-success">In Stock</span></p>
                        </h5>
                        {!! $produk->informasi !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-items-slider section-padding bg-white border-top">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">Shop
            </h5>
        </div>
        <div class="owl-carousel owl-carousel-featured">
            @foreach ($produk->toko as $toko)
            <div class="item">
                <div class="product">
                    <a href="#">
                        <div class="product-header">
                            <img class="img-fluid" src="{{asset('storage/'.$toko->foto)}}" alt="{{$toko->nama}}">
                        </div>
                        <div class="product-body">
                            <h5>{{$toko->nama}}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section-padding bg-white border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="feature-box">
                    <i class="mdi mdi-truck-fast"></i>
                    <h6>Free & Next Day Delivery</h6>
                    <p>Lorem ipsum dolor sit amet, cons...</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="feature-box">
                    <i class="mdi mdi-basket"></i>
                    <h6>100% Satisfaction Guarantee</h6>
                    <p>Rorem Ipsum Dolor sit amet, cons...</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="feature-box">
                    <i class="mdi mdi-tag-heart"></i>
                    <h6>Great Daily Deals Discount</h6>
                    <p>Sorem Ipsum Dolor sit amet, Cons...</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
