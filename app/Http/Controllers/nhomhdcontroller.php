<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\nhomhdRequest;
use App\nhomhd;
use DB;
use Session;

class nhomhdcontroller extends Controller
{
    public function index()
    {
        $nhomhd=DB::table('visos_nhomhopdong')->get();
        return view('nhomhd.index')->with('dsnhomhopdong', $nhomhd);
    }
    public function create(){
        $nhomhd=nhomhd::all();
        return view('nhomhd.create')->with('dsnhomhopdong', $nhomhd);
    }
    public function store(Request $request)
    {
        $nhomhd= new nhomhd();
        $nhomhd->NHD_ten=$request->NHD_ten;
        $nhomhd->NHD_taoMoi=$request->NHD_taoMoi;
        $nhomhd->NHD_capNhat=$request->NHD_capNhat;
        $nhomhd->NHD_trangThai=$request->NHD_trangThai;
        $nhomhd->save();
        Session::flash('alert-info', 'Tạo nhóm hợp đồng thành công!');
        return redirect()->route('dsnhomhopdong.index');
    }
    public function edit($id)
    {
        $nhomhd=nhomhd::where("NHD_ma", $id)->first();
        return view('nhomhd.edit')
        ->with('dsnhomhopdong', $nhomhd);
    }
    
    public function update(Request $request, $id)
    {
        $nhomhd= nhomhd::where("NHD_ma", $id)->first();
        $nhomhd->NHD_ten=$request->NHD_ten;
        $nhomhd->NHD_taoMoi=$request->NHD_taoMoi;
        $nhomhd->NHD_capNhat=$request->NHD_capNhat;
        $nhomhd->NHD_trangThai=$request->NHD_trangThai;
        $nhomhd->save();
        Session::flash('alert-info', 'Cập nhật thành công nhóm hợp đồng!');
        return redirect()->route('dsnhomhopdong.index');
    }
    public function destroy($id)
    {
        $nhomhd=nhomhd::where("NHD_ma", $id)->first();
        $nhomhd->delete();
        Session::flash('alert-danger', 'Xóa nhóm hợp đồng thành công!');
        return redirect()->route('dsnhomhopdong.index');
    }
    
   
}
