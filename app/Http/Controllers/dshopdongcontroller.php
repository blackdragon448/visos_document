<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danhsachhopdong;
use App\nhomhd;
use Session;
use App\Http\Requests\dshopdongRequest;

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
        Session::flash('alert-info', 'Thêm mới hợp đồng thành công!');
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
        Session::flash('alert-info', 'Cập nhật hợp đồng thành công!');
        return redirect()->route('danhsachhopdong.index');
    
    }
    public function destroy($id)
    {
        $dshopdong=danhsachhopdong::where("HD_ma", $id)->first();
        $dshopdong->delete();
        Session::flash('alert-danger', 'Xóa hợp đồng thành công!');
        return redirect()->route('danhsachhopdong.index');
    }
}
