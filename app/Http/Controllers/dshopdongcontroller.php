<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danhsachhopdong;
use App\nhomhd;
use Session;

class dshopdongcontroller extends Controller
{
    public function index()
    {
        $dshopdong=danhsachhopdong::all();
        return view('danhsachhopdong.index')
        ->with('danhsachhopdong', $dshopdong);
    }
    public function create()
    {
        $nhomhd= nhomhd::all();
        return view('danhsachhopdong.create')->with('dsnhomhopdong', $nhomhd);
    }
    public function store(Request $request)
    {
        $dshopdong = new danhsachhopdong();
        $dshopdong->HD_ten=$request->HD_ten;
        $dshopdong->HD_taoMoi=$request->HD_taoMoi;
        $dshopdong->HD_capNhat=$request->HD_capNhat;
        $dshopdong->HD_trangThai=$request->HD_trangThai;
        $dshopdong->NHD_ma=$request->NHD_ma;
        $dshopdong->save();
        Session::flash('alert-info', 'them moi hop dong thanh cong!');
        return redirect()->route('danhsachhopdong.index');
    
    }
}
