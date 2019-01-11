<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use Session;
use validation;
use App\phanquyen;
class nhanvienController extends Controller
{
    public function index()
    {
        $dsnhanvien=nhanvien::all();
        return view('nhanvien.index')
        ->with('danhsachnhanvien', $dsnhanvien);
    }
    public function create()
    {
        $phanquyen = phanquyen::all();
        return view('nhanvien.create')->with('dsphanquyen', $phanquyen);
    }
    public function store(Request $request)
    {
        $validation=$request->validate([
            'NV_hinhAnh'=>'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);
        $dsnhanvien = new danhsachnhanvien();
        $dsnhanvien->NV_ten=$request->NV_ten;
        $dsnhanvien->NV_namSinh=$request->NV_namSinh;
        $dsnhanvien->NV_chungMinh=$request->NV_chungMinh;
        $dsnhanvien->NV_diaChi=$request->NV_diaChi;
        $dsnhanvien->NV_dienThoai=$request->NV_dienThoai;
        $dsnhanvien->NV_mail=$request->NV_mail;
        $dsnhanvien->NV_website=$request->NV_wedsite;
        $dsnhanvien->NV_taoMoi=$request->NV_taoMoi;
        $dsnhanvien->NV_capNhat=$request->NV_capNhat;
        $dsnhanvien->NV_trangThai=$request->NV_trangThai;
        $dsnhanvien->PQ_ma=$request->PQ_ma;
        if($request->hasFile('NV_hinhAnh'))
        {
            $file=$request->NV_hinhAnh;
            $dsnhanvien=$file->storeAs('public/photos', $dsnhanvien->NV_hinhAnh);
        }
        $dsnhanvien->save();
        Session::flash('alert-info', 'them moi nhan vien thanh cong!');
        return redirect()->route('danhsachnhanvien.index');
    
    }
    public function edit($id)
    {
        $dsnhanvien=nhanvien::where("NV_ma", $id)->first();
        $phanquyen=phanquyen::all();
        return view('nhanvien.edit')->with('danhsachnhanvien', $dsnhanvien)
        ->with('dsphanquyen', $phanquyen);
    }
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'NV_hinhAnh'=>'file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);
        $dsnhanvien = nhanvien::where("NV_ma", $id)->first();
        $dsnhanvien->NV_ten=$request->NV_ten;
        $dsnhanvien->NV_namSinh=$request->NV_namSinh;
        $dsnhanvien->NV_chungMinh=$request->NV_chungMinh;
        $dsnhanvien->NV_diaChi=$request->NV_diaChi;
        $dsnhanvien->NV_dienThoai=$request->NV_dienThoai;
        $dsnhanvien->NV_mail=$request->NV_mail;
        $dsnhanvien->NV_website=$request->NV_wedsite;
        $dsnhanvien->NV_taoMoi=$request->NV_taoMoi;
        $dsnhanvien->NV_capNhat=$request->NV_capNhat;
        $dsnhanvien->NV_trangThai=$request->NV_trangThai;
        $dsnhanvien->PQ_ma=$request->PQ_ma;
        if($request->hasFile('NV_hinhAnh'))
        {
            Storage::delete('public/photos/'. $dsnhanvien->NV_hinhAnh);
            $file=$request->NV_hinhAnh;
            $dsnhanvien->NV_hinhAnh=$file->getClientOriginalName();
            $fileSaved=$file->storeAs('public/photos', $dsnhanvien->NV_hinhAnh);
        }
       
        $dsnhanvien->save();
        Session::flash('alert-info', 'cap nhat thong tin nhan vien thanh cong!');
        return redirect()->route('danhsachnhanvien.index');
    
    }
    public function destroy($id)
    {
        
        $dsnhanvien=nhanvien::where("NV_ma", $id)->first();
        if(empty($dsnhanvien)==false)
        {
            Storage::delete('public/photos/');
        }
        $dsnhanvien->delete();
        Session::flash('alert-danger', 'xoa du lieu thanh cong');
        return redirect()->route('danhsachnhanvien.index');
    }
}
