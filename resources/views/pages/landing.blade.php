@extends('layouts.app')

@section('content')
<section class="carousel-slider-main text-center border-top border-bottom bg-white">
    <div class="owl-carousel owl-carousel-slider">
        <div class="item">
            <a href="shop.html"><img class="img-fluid" src="{{asset('asset/img/slider/slider1.jpg')}}"
                    alt="First slide"></a>
        </div>
        <div class="item">
            <a href="shop.html"><img class="img-fluid" src="{{asset('asset/img/slider/slider2.jpg')}}"
                    alt="First slide"></a>
        </div>
        <div class="item">
            <a href="shop.html"><img class="img-fluid" src="{{asset('asset/img/slider/slider3.jpg')}}"
                    alt="First slide"></a>
        </div>
    </div>
</section>
<section class="offer-product mt-3">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12">
                <a href="#"><img class="img-fluid" src="{{asset('asset/img/ad/1.jpg')}}" alt=""></a>
            </div>
        </div>
    </div>
</section>
<section class="product-items-slider section-padding">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">&nbsp;
                <a class="float-right text-secondary" href="shop.html">View All</a>
            </h5>
        </div>
        <div class="owl-carousel owl-carousel-featured">
            @foreach ($bahan as $b)
                <div class="item">
                    <div class="product">
                        <a href="{{url('bahan-masakan/'.$b->slug)}}">
                            <div class="product-header">
                                <img class="img-fluid" src="{{asset('storage/'.$b->foto)}}" alt="{{$b->nama}}">
                            </div>
                            <div class="product-body">
                                <h5>{{$b->nama}}</h5>
                                <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - {{$b->stok}} {{ucwords($b->satuan)}}</h6>
                            </div>
                            <div class="product-footer pb-3">
                                <button type="button" class="btn btn-secondary btn-sm float-right"><i
                                        class="mdi mdi-cart-outline"></i> Add To Cart</button>
                                <p class="offer-price mb-0">Rp {{number_format($b->harga)}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="offer-product">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12">
                <a href="#"><img class="img-fluid" src="{{asset('asset/img/ad/2.jpg')}}" alt=""></a>
            </div>
        </div>
    </div>
</section>
<section class="product-items-slider section-padding">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">&nbsp;
                <a class="float-right text-secondary" href="shop.html">View All</a>
            </h5>
        </div>
        <div class="owl-carousel owl-carousel-featured">
            @foreach ($resep as $res)
            <div class="item">
                <div class="product">
                    <a href="{{url('resep/'.$res->slug)}}">
                        <div class="product-header">
                            <img class="img-fluid" src="{{asset('storage/'.$res->foto[0])}}" alt="{{$res->nama}}">
                        </div>
                        <div class="product-body">
                            <h5>{{$res->nama}}</h5>
                            <h6>oleh <strong>{{$res->author}}</strong></h6>
                            <h6 class="text-right"><strong>{{date('d F Y',strtotime($res->created_at))}}</strong></h6>
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
