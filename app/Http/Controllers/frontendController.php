<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datainfo;
use Session;
use validation;
use App\phanquyen;
use App\nhanvien;
use App\nhomhd;
use App\danhsachhopdong;
class frontendController extends Controller
{
    public function index()
    {
        $datainfo=datainfo::paginate(5);
        return view('frontend.index')
        ->with('danhsachdulieu', $datainfo)
        ;
    }
   
    public function create()
    {
        $phanquyen = phanquyen::all();
        return view('datainfo.create')
        ->with('nhanvien', $dsnhanvien)
        ->with('nhomhd', $nhomhd)
        ->with('danhsachhopdong', $dshopdong);
    }
    public function store(Request $request)
    {
        $datainfo = new datainfo();
        $datainfo->d_ngycc=$request->d_ngaycc;
        $datainfo->d_socc=$request->d_socc;
        $datainfo->d_noiDungA=$request->d_noiDungA;
        $datainfo->d_noiDungB=$request->d_noiDungB;
        $datainfo->d_noiDungC=$request->d_noiDungC;
        $datainfo->d_taiSan=$request->d_taisan;
        $datainfo->d_dienThoai=$request->d_dienThoai;
        $datainfo->d_ngayTao=$request->d_ngayTao;
        $datainfo->d_capNhat=$request->d_capNhat;
        $datainfo->d_trangThai=$request->d_trangThai;
        $datainfo->NHD_ma=$request->NHD_ma;
        $datainfo->HD_ma=$request->HD_ma;
        $datainfo->NV_ma=$request->VN_ma;
        
        $datainfo->save();
        Session::flash('alert-info', 'Thêm mới dữ liệu thành công!');
        return redirect()->route('danhsachdatainfo.index');
    
    }
    public function edit($id)
    {
        $datainfo=datainfo::where("d_ma", $id)->first();
        $phanquyen=phanquyen::all();
        return view('datainfo.edit')->with('danhsachdatainfo', $datainfo)
        ->with('dsphanquyen', $phanquyen);
    }
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'd_hinhAnh'=>'file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);
        $datainfo = datainfo::where("d_ma", $id)->first();
        $datainfo->d_ten=$request->d_ten;
        $datainfo->d_namSinh=$request->d_namSinh;
        $datainfo->d_chungMinh=$request->d_chungMinh;
        $datainfo->d_diaChi=$request->d_diaChi;
        $datainfo->d_dienThoai=$request->d_dienThoai;
        $datainfo->d_mail=$request->d_mail;
        $datainfo->d_website=$request->d_wedsite;
        $datainfo->d_taoMoi=$request->d_taoMoi;
        $datainfo->d_capNhat=$request->d_capNhat;
        $datainfo->d_trangThai=$request->d_trangThai;
        $datainfo->PQ_ma=$request->PQ_ma;
        if($request->hasFile('d_hinhAnh'))
        {
            Storage::delete('public/photos/'. $datainfo->d_hinhAnh);
            $file=$request->d_hinhAnh;
            $datainfo->d_hinhAnh=$file->getClientOriginalName();
            $fileSaved=$file->storeAs('public/photos', $datainfo->d_hinhAnh);
        }
       
        $datainfo->save();
        Session::flash('alert-info', 'Cập nhật dữ liệu thành công!');
        return redirect()->route('danhsachdatainfo.index');
    
    }
    private function searchdatainfo(Request $request)
    {
        $query = DB::table('visos_datainfo')->select('*');
        $data=$query->get();
        return $data;
    }
    // public function destroy($id)
    // {
        
    //     $datainfo=datainfo::where("d_ma", $id)->first();
    //     if(empty($datainfo)==false)
    //     {
    //         Storage::delete('public/photos/');
    //     }
    //     $datainfo->delete();
    //     Session::flash('alert-danger', 'xoa du lieu thanh cong');
    //     return redirect()->route('danhsachdatainfo.index');
    // }
    }