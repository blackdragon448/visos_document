<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\phanquyenRequest;
use App\phanquyen;
use DB;
use Session;

class phanquyenController extends Controller
{
    public function index()
    {
        $phanquyen=DB::table('visos_phanquyen')->get();
        return view('phanquyen.index')->with('dsphanquyen', $phanquyen);
    }
    public function create(){
        $phanquyen=phanquyen::all();
        return view('phanquyen.create')->with('dsnphanquyen', $phanquyen);
    }
    public function store(Request $request)
    {
        $phanquyen= new phanquyen();
        $phanquyen->PQ_ten=$request->PQ_ten;
        $phanquyen->PQ_taoMoi=$request->PQ_taoMoi;
        $phanquyen->PQ_capNhat=$request->PQ_capNhat;
        $phanquyen->PQ_trangThai=$request->PQ_trangThai;
        $phanquyen->save();
        Session::flash('alert-info', 'tao moi thanh cong!');
        return redirect()->route('dsphanquyen.index');
    }
    public function edit($id)
    {
        $phanquyen=phanquyen::where("PQ_ma", $id)->first();
        return view('phanquyen.edit')
        ->with('dsphanquyen', $phanquyen);
    }
    
    public function update(Request $request, $id)
    {
        $phanquyen= phanquyen::where("PQ_ma", $id)->first();
        $phanquyen->PQ_ten=$request->PQ_ten;
        $phanquyen->PQ_taoMoi=$request->PQ_taoMoi;
        $phanquyen->PQ_capNhat=$request->PQ_capNhat;
        $phanquyen->PQ_trangThai=$request->PQ_trangThai;
        $phanquyen->save();
        Session::flash('alert-info', 'Cap nhat thanh cong!');
        return redirect()->route('dsphanquyen.index');
    }
    public function destroy($id)
    {
        $phanquyen=phanquyen::where("PQ_ma", $id)->first();
        $phanquyen->delete();
        Session::flash('alert-danger', 'xoa thanh cong!');
        return redirect()->route('dsphanquyen.index');
    }
    
   
}
