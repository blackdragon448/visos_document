@extends('backend.layouts.index')
@section('title')
chinh sua nhom hop dong
@endsection
@section('main-content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('dsnhomhopdong.update', ['id'=>$nhomhd->NHD_ma])}}"> 
    <input type="hidden" name="_method" value="PUT"/>
    {{csrf_field()}}
    <div class="form-group">
        <label for="NHD_ten">Ma nhom hop dong</label>
        <input type="text" class="form-control" id="NHD_ten" name="NHD_ten" placeholder="ten nhom" value="{{$nhomhd->NHD_ten}}">
    </div>
    <div class="form-group">
        <label for="NHD_taoMoi">Ten nhom hop dong</label>
        <input type="text" class="form-control" id="NHD_taoMoi" name="NHD_taoMoi" placeholder="tao moi" value="{{$nhomhd->NHD_taoMoi}}">
    </div>
    <div class="form-group">
        <label for="NHD_capNhat">Ten nhom hop dong</label>
        <input type="text" class="form-control" id="NHD_capNhat" name="NHD_capNhat" placeholder="cap nhat" value="{{$nhomhd->NHD_capNhat}}">
    </div>
    <select name="NHD_trangThai">
        <option value="1" {{$nhomhd->NHD_trangThai==1?"selected":""}}>khoa</option>
        <option value="2" {{$nhomhd->NHD_trangThai==2?"selected":""}}>Kha dung</option>
    </select>
    <br/>
    <br/>
    <button type="submit" class="btn btn-primary">Luu</button>
    <a href="{{route('dsnhomhopdong.index')}}" class="btn btn-primary">Quy lai</a>
</form>
@endsection