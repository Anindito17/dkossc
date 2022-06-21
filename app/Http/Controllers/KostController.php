<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kost;
use App\master_kecamatan;
use App\master_jenis;
use App\master_mandi;
use App\master_listrik;
use App\master_wifi;
use Illuminate\Support\Facades\DB;

class KostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $data = array();
        // $data['data_kost'] = \App\Kost::all();
        $data = DB::table('kosts')->join('master_kecamatan', 'master_kecamatan.id', '=', 'kosts.kecamatan')->join('master_jenis','master_jenis.id', '=', 'kosts.jenis')->join('master_mandi','master_mandi.id', '=', 'kosts.mandi')->join('master_listrik','master_listrik.id', '=', 'kosts.listrik')->join('master_wifi','master_wifi.id', '=', 'kosts.wifi')->select('master_kecamatan.nama as namakec','master_kecamatan.id as idkec','kosts.*','master_jenis.nama as namajen','master_jenis.id as idjen','master_mandi.nama as namaman','master_mandi.id as idman','master_listrik.nama as namalis','master_listrik.id as idlis','master_wifi.nama as namawif','master_wifi.id as idwif')->get();
        $jenis = DB::table('master_jenis')->get();
        $mandi = DB::table('master_mandi')->get();
        $listrik = DB::table('master_listrik')->get();
        $wifi = DB::table('master_wifi')->get();
        $kecamatan = DB::table('master_kecamatan')->get();

        return view('dashboard')->with('kosts',$data)->with('kecamatan',$kecamatan)->with('jenis',$jenis)->with('mandi',$mandi)->with('listrik',$listrik)->with('wifi',$wifi);
        
        // print_r($data);
    }

    public static function filter_kecamatan(Request $request)
    {
        
        $kecamatan = $request->kecamatan;
        $data  = DB::table('kosts')->join('master_kecamatan', 'master_kecamatan.id', '=', 'kosts.kecamatan')->join('master_jenis','master_jenis.id', '=', 'kosts.jenis')->join('master_mandi','master_mandi.id', '=', 'kosts.mandi')->join('master_listrik','master_listrik.id', '=', 'kosts.listrik')->join('master_wifi','master_wifi.id', '=', 'kosts.wifi')->select('master_kecamatan.nama as namakec','master_kecamatan.id as idkec','kosts.*','master_jenis.nama as namajen','master_jenis.id as idjen','master_mandi.nama as namaman','master_mandi.id as idman','master_listrik.nama as namalis','master_listrik.id as idlis','master_wifi.nama as namawif','master_wifi.id as idwif')->where('kosts.kecamatan',$kecamatan)->get();
        $kecamatan = DB::table('master_kecamatan')->get();
        $jenis = DB::table('master_jenis')->get();$jenis = DB::table('master_jenis')->get();
        $mandi = DB::table('master_mandi')->get();$mandi = DB::table('master_mandi')->get();
        $wifi = DB::table('master_wifi')->get();$wifi = DB::table('master_wifi')->get();
        $listrik = DB::table('master_listrik')->get();$listrik = DB::table('master_listrik')->get();
        
        return view('dashboard')->with('kosts',$data)->with('kecamatan',$kecamatan)->with('jenis',$jenis)->with('mandi',$mandi)->with('listrik',$listrik)->with('wifi',$wifi);
    }
}
