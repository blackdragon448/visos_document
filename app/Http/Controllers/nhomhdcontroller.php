<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\nhomhdrequest;
use App\nhomhd;

use Session;

class nhomhdcontroller extends Controller
{
    public function index()
    {
        $nhomhd=nhomhd::all();
        return view('nhomhd.index')->with('dsnhomhopdong', $nhomhd);
    }
    public function create(){
        $nhomhd=nhomhd::all();
        return view('nhomhd.create')
        ->with('dsnhomhopdong', $nhomhd);
    }
    public function store(Request $request)
    {
        $dsnhomhopdong= new nhomhd();
        $dsnhomhopdong->NHD_ten=$request->NHD_ten;
        $dsnhomhopdong->NHD_taoMoi=$request->NHD_taoMoi;
        $dsnhomhopdong->NHD_capNhat=$request->NHD_capNhat;
        $dsnhomhopdong->NHD_trangThai=$request->NHD_trangThai;
        $dsnhomhopdong->save();
        Session::flash('alert-info', 'tao moi thanh cong nhom hop dong!');
        return redirect()->route('dsnhomhopdong.index');
    }
    public function edit($id)
    {
        $nhomhd=nhomhd::where("NHD_ma", $id)->first();
        return view('nhomhd.edit')
        ->with('dsnhomhopdong', $nhomhd);
    }
    
    public function update(nhomhdrequest $request, $id)
    {
        $dsnhomhopdong= nhomhd::where("NHD_ma", $id)->first();
        $dsnhomhopdong->NHD_ten=$request->NHD_ten;
        $dsnhomhopdong->NHD_taoMoi=$request->NHD_taoMoi;
        $dsnhomhopdong->NHD_capNhat=$request->NHD_capNhat;
        $dsnhomhopdong->NHD_trangThai=$request->NHD_trangThai;
        $dsnhomhopdong->save();
        Session::flash('alert-info', 'Cap nhat thanh cong nhom hop dong!');
        return redirect()->route('dsnhomhopdong.index');
    }
    public function destroy($id)
    {
        $dsnhomhopdong=nhomhd::where("NHD_ma", $id)->first();
        $dsnhomhopdong->delete();
        Session::flash('alert-danger', 'xoa nhom hop dong thanh cong!');
        return redirect()->route('dsnhomhopdong.index');
    }
    
   
}
