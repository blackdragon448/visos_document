<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use Session;

class nhanvienController extends Controller
{
    public function index()
    {
        $dsnhanvien=nhanvien::all();
        return view('danhsachnhanvien.index')
        ->with('danhsachnhanvien', $dsnhanvien);
    }
    public function create()
    {
        $dsnhanvien = nhanvien::all();
        return view('danhsachnhanvien.create')->with('dsnhanvien', $dsnhanvien);
    }
    public function store(Request $request)
    {
        $dsnhanvien = new danhsachhopdong();
        $dsnhanvien->HD_ten=$request->HD_ten;
        $dsnhanvien->HD_taoMoi=$request->HD_taoMoi;
        $dsnhanvien->HD_capNhat=$request->HD_capNhat;
        $dsnhanvien->HD_trangThai=$request->HD_trangThai;
        $dsnhanvien->NHD_ma=$request->NHD_ma;
        $dsnhanvien->save();
        Session::flash('alert-info', 'them moi hop dong thanh cong!');
        return redirect()->route('danhsachhopdong.index');
    
    }
    public function edit($id)
    {
        $dshopdong=danhsachhopdong::where("HD_ma", $id)->first();
        $nhomhd=nhomhd::all();
        return view('danhsachhopdong.edit')->with('danhsachhopdong', $dshopdong)
        ->with('dsnhomhopdong', $nhomhd);
    }
    public function update(Request $request, $id)
    {
        $dshopdong = danhsachhopdong::where("HD_ma", $id)->first();
        $dshopdong->HD_ten=$request->HD_ten;
        $dshopdong->HD_taoMoi=$request->HD_taoMoi;
        $dshopdong->HD_capNhat=$request->HD_capNhat;
        $dshopdong->HD_trangThai=$request->HD_trangThai;
        $dshopdong->NHD_ma=$request->NHD_ma;
        $dshopdong->save();
        Session::flash('alert-info', 'cap nhat hop dong thanh cong!');
        return redirect()->route('danhsachhopdong.index');
    
    }
    public function destroy($id)
    {
        $dshopdong=danhsachhopdong::where("HD_ma", $id)->first();
        $dshopdong->delete();
        Session::flash('alert-danger', 'xoa du lieu thanh cong');
        return redirect()->route('danhsachhopdong.index');
    }
}
