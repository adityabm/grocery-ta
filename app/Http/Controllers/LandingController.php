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
}
