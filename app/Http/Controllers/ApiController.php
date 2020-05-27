<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BahanMasakan;
use App\Resep;
use App\ResepDetail;
use App\Toko;
use App\TokoJual;
use App\User;

use Auth;
use DB;
use Hash;

class ApiController extends Controller
{
    public function getDataProduk(Request $request)
    {
        $models = BahanMasakan::query();
        $params = $request->get('params', false);
        $order  = $request->get('order', false);

        if ($params) {
            foreach ($params as $key => $val) {
                if ($val == '') continue;
                switch ($key) {
                    default:
                        $models = $models->where($key, $val);
                        break;
                }
            }
        }

        $count = $models->count();

        if ($order) {
            $order_direction = $request->get('order_direction', 'asc');
            if (empty($order_direction)) $order_direction = 'asc';

            switch ($order) {
                default:
                    $models = $models->orderBy($order, $order_direction);
                    break;
            }
        }

        $page    = $request->get('page', 1);
        $perpage = $request->get('perpage', 20);

        $models = $models->skip(($page - 1) * $perpage)->take($perpage)->get();
        foreach ($models as &$model) {
            $model->foto_full_url = asset('storage/'.$model->foto);
        }

        $result = [
            'data'  => $models,
            'count' => $count
        ];

        return response()->json($result);
    }

    public function getDataResep(Request $request)
    {
        $models = Resep::with('bahan');
        $params = $request->get('params', false);
        $order  = $request->get('order', false);

        if ($params) {
            foreach ($params as $key => $val) {
                if ($val == '') continue;
                switch ($key) {
                    default:
                        $models = $models->where($key, $val);
                        break;
                }
            }
        }

        $count = $models->count();

        if ($order) {
            $order_direction = $request->get('order_direction', 'asc');
            if (empty($order_direction)) $order_direction = 'asc';

            switch ($order) {
                default:
                    $models = $models->orderBy($order, $order_direction);
                    break;
            }
        }

        $page    = $request->get('page', 1);
        $perpage = $request->get('perpage', 20);

        $models = $models->skip(($page - 1) * $perpage)->take($perpage)->get();
        foreach ($models as &$model) {
            $model->jumlah_bahan = count($model->bahan);
            $model->created = date('d F Y',strtotime($model->created_at));

            $tmp = [];
            foreach ($model->foto_path as $foto) {
                $tmp[] = asset('storage/'.$foto);
            }
            $model->foto_full_url = $tmp;
        }

        $result = [
            'data'  => $models,
            'count' => $count
        ];

        return response()->json($result);
    }

    public function login(Request $request)
    {
        $email = $request->post('email',false);
        $password = $request->post('password',false);

        if(!$email || !$password){
            return response()->json(['success' => false,'message' => 'Email / Password Cannot be Blank','data' => null]);
        }

        $check = User::select('name','email','password','avatar','created_at','nohp')->where('email',$email)->first();

        if(!$check){
            return response()->json(['success' => false,'message' => 'User Not Found','data' => null]);
        }

        $pass = Hash::check($password, $check->password);

        if(!$pass){
            return response()->json(['success' => false,'message' => 'Password Incorrect','data' => null]);
        }

        $check->avatar = asset('storage/'.$check->avatar);

        return response()->json(['success' => true,'message' => 'User Found, Login Success','data' => $check]);
    }

    public function homepage(Request $request)
    {
        $banner = [asset('asset/img/slider/slider1.jpg'),asset('asset/img/slider/slider2.jpg'),asset('asset/img/slider/slider3.jpg')];

        $ad_banner = [asset('asset/img/ad/1.jpg'),asset('asset/img/ad/2.jpg')];

        $resep = Resep::limit(5)->get();
        $bahan = BahanMasakan::limit(5)->get();

        foreach ($resep as &$res) {
            $tmp = [];
            foreach ($res->foto_path as $foto) {
                $tmp[] = asset('storage/'.$foto);
            }
            $res->foto = $tmp;
        }
        
        foreach ($bahan as &$bah) {
            $bah->foto = asset('storage/'.$bah->foto);
        }

        $res = [
            'banner' => $banner,
            'ad_banner' => $ad_banner,
            'resep' => $resep,
            'bahan_masakan' => $bahan
        ];

        return response()->json(['success' => true,'message' => 'Showing Homepage','data' => $res]);
    }
}
