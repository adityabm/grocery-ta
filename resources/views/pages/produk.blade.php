@extends('layouts.app')

@section('content')
    <section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span class="mdi mdi-chevron-right"></span> <a href="#">Produk</a>
            </div>
        </div>
        </div>
    </section>
    <produk-list></produk-list>
@endsection