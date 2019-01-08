<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\nhomhdrequest;
use App\nhomhd;
use DB;
use Session;

class nhomhdcontroller extends Controller
{
    public function index()
    {
        $dsnhom= DB::table('visos_nhomHopdong')->get();
        return view('nhomhd.index')->with('dsnhomhopdong', $dsnhom);
    }
    public function edit($id)
    {
        $nhomhd=nhomhd::where("NHD_ma", $id)->first();
        return view('nhomhd.edit')
        ->with('dsnhomhopdong', $nhomhd);
    }
    
    public function update(nhomhdrequest $request, $id)
    {
        $nhomhd= nhomhd::where("NHD_ma", $id)->first();
        $nhomhd->NHD_ten=$request->NHD_ten;
        $nhomhd->NHD_taoMoi=$request->NHD_taoMoi;
        $nhomhd->NHD_capNhat=$request->NHD_capNhat;
        $nhomhd->NHD_trangThai=$request->NHD_trangThai;
        $nhomhd->save();
        Session::flash('alert-info', 'Cap nhat thanh cong nhom hop dong!');
        return redirect()->route('dsnhomhopdong.index');
    }
    public function destroy($id)
    {
        $nhomhd=nhomhd::where("NHD_ma", $id)->first();
        $nhomhd->delete();
        Session::flash('alert-danger', 'xoa nhom hop dong thanh cong!');
        return redirect()->route('dsnhomhopdong.index');
    }
    public function create(){
        $nhomhd=nhomhd::all();
        return view('nhomhd.create')
        ->with('dsnhomhopdong', $nhomhd);
    }
    public function store(Request $request)
    {
        $nhomhd= new nhomhd();
        $nhomhd->NHD_ten=$request->NHD_ten;
        $nhomhd->NHD_taoMoi=$request->NHD_taoMoi;
        $nhomhd->NHD_capNhat=$request->NHD_capNhat;
        $nhomhd->NHD_trangThai=$request->NHD_trangThai;
        $nhomhd->save();
        Session::flash('alert-info', 'tao moi thanh cong nhom hop dong!');
        return redirect()->route('dsnhomhopdong.index');
    }
   
}
