<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Resep;
use App\BahanMasakan;

class LandingController extends Controller
{
    public function index()
    {
        $resep = Resep::limit(5)->get();
        $bahan = BahanMasakan::limit(5)->get();

        return view('pages.landing',compact('resep','bahan'));
    }

    public function produk()
    {
        return view('pages.produk');
    }

    public function resep()
    {
        return view('pages.resep');
    }

    public function resepDetail($slug)
    {
        $resep = Resep::with('bahan')->where('slug',$slug)->first();

        if(!$resep){
            return redirect('resep');
        }

        return view('pages.resep-detail',compact('resep'));
    }

    public function produkDetail($slug)
    {
        $produk = BahanMasakan::with('toko')->where('slug',$slug)->first();

        if(!$produk){
            return redirect('bahan-masakan');
        }

        return view('pages.produk-detail',compact('produk'));
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }
}
