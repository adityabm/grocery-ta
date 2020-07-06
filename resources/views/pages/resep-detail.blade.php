@extends('layouts.app')

@section('content')
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span
                    class="mdi mdi-chevron-right"></span> <a href="{{url('resep')}}">Resep</a> <span
                    class="mdi mdi-chevron-right"></span> <a href="#">{{$resep->nama}}</a>
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
                            @foreach ($resep->foto_path as $foto)
                                <div class="item"><img alt="{{$resep->nama}}-foto" src="{{asset('storage/'.$foto)}}" class="img-fluid img-center w-100"></div>
                            @endforeach
                        </div>
                        <div id="sync2" class="owl-carousel">
                            @foreach ($resep->foto_path as $foto)
                                <div class="item"><img alt="{{$resep->nama}}-thumbnail" src="{{asset('storage/'.$foto)}}" class="img-fluid img-center"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shop-detail-right">
                    <h2>{{$resep->nama}}</h2>
                    <h6>oleh <strong>{{$resep->author}}</strong></h6>
                    <h6><strong><span class="mdi mdi-approval"></span> Jumlah Bahan</strong> - {{count($resep->bahan)}} Bahan Masakan</h6>
                    <div class="short-description">
                        <h5>
                            Informasi Singkat
                            <p class="float-right">Kategori: <span class="badge badge-success">{{ucwords(str_replace('-',' ',$resep->category))}}</span></p>
                        </h5>
                        {!! $resep->informasi !!}
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="shop-detail-right p-3">
                    <h2>Langkah Memasak</h2>
                    <div class="short-description">
                        {!! $resep->step !!}
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <div class="shop-detail-right p-3">
                    <iframe class="w-100" height="500"
                    src="https://www.youtube.com/embed/xkj7G1K-EUM">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-items-slider section-padding bg-white border-top">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">Bahan-bahan
            </h5>
        </div>
        <div class="owl-carousel owl-carousel-featured">
            @foreach ($resep->bahan as $bahan)
            <div class="item">
                <div class="product">
                    <a href="{{url('bahan-masakan/'.$bahan->slug)}}">
                        <div class="product-header">
                            <img class="img-fluid" src="{{asset('storage/'.$bahan->foto)}}" alt="{{$bahan->nama}}">
                        </div>
                        <div class="product-body">
                            <h5>{{$bahan->nama}}</h5>
                            <h6><strong><span class="mdi mdi-approval"></span> Tersedia</strong> - {{$bahan->stok}} {{$bahan->satuan}}</h6>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="beli-product mt-3 text-right pr-3">
            <button class="btn btn-lg btn-primary"><i
                class="mdi mdi-cart-outline"></i> Beli Semua Bahan</button>
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
