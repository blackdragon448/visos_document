@extends('backend.layouts.index')
@section('title')
chinh sua hop dong
@endsection
@section('custom-css')
<link href="{{asset('vendor/bootstrap-fileinput/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all/css" rel="stylesheet" crossorigin="anonymous">
<link href="{{asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css')}}" media="all" rel="stylesheet" type="text/css"/>
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
<form method="post" action="{{route('danhsachhopdong.update', ['id'=>$danhsachhopdong->HD_ma])}}" enctype="multipart/form-data"> 
    <input type="hidden" name="_method" value="PUT"/>
    {{csrf_field()}}
    <div class="form-group">
        <label for="NHD_ma">Nhom hop dong</label>
        <select name="NHD_ma" class="form-control">
            @foreach($dsnhomhopdong as $nhomhd)
                @if($nhomhd->NHD_ma==$danhsachhopdong->NHD_ma)
                <option value="{{$nhomhd->NHD_ma}}" selected> {{$nhomhd->NHD_ten}}</option>
                @else
                <option value="{{$nhomhd->NHD_ma}}"> {{$nhomhd->NHD_ten}}</option>
                @endif
            @endforeach
        </select>

    </div>
    <div class="form-group">
        <label for="HD_ten">Hop dong ten</label>
        <input type="text" class="form-control" id="HD_ten" name="HD_ten" placeholder="ten hop dong" value="{{$danhsachhopdong->HD_ten}}">
    </div>
    <div class="form-group">
        <label for="HD_taoMoi">ngay tao moi hop dong</label>
        <input type="text" class="form-control" id="HD_taoMoi" name="HD_taoMoi" placeholder="ngay tao moi" value="{{$danhsachhopdong->HD_taoMoi}}">
    </div>
    <div class="form-group">
        <label for="HD_capNhat">ngay cap nhat hop dong</label>
        <input type="text" class="form-control" id="HD_capNhat" name="HD_capNhat" placeholder="ngay cap nhat" value="{{$danhsachhopdong->HD_capNhat}}">
    </div>
    <select name="HD_trangThai">
        <option value="1" {{old('HD_trangThai', $danhsachhopdong->HD_trangThai)==1?"selected":""}}>khoa</option>
        <option value="2" {{old('HD_trangThai', $danhsachhopdong->HD_trangThai)==2?"selected":""}}>Kha dung</option>
    </select>
    <br/>
    <br/>
    <button type="submit" class="btn btn-primary">Luu</button>
    <a href="{{route('danhsachhopdong.index')}}" class="btn btn-primary">Quy lai</a>
</form>

@endsection
@section('custom-scripts')
<script src="{{asset('vendor/bootstrap-fileinput/js/plugins/sortable.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap-fileinput/js/fileinput.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap-fileinput/js/locales/fr.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap-fileinput/themes/fas/theme.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.js')}}" type="text/javascript"></script>


<script src="{{asset('theme/getelella/vendors/jquery.inputmask/dist/inputmask/jquery.inputmask.js')}}"></script>
<script src="{{asset('theme/getelella/vendors/jquery.inputmask/dist/inputmask/inputmask.date.extensions.js')}}"></script>
<script src="{{asset('theme/getelella/vendors/jquery.inputmask/dist/inputmask/inputmask.extensions.js')}}"></script>
<script>
$(document).ready(function(){

});
</script>
@endsection