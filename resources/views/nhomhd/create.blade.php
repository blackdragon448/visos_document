@extends('backend.layouts.index')
@section('title')
Them moi nhom hop dong
@endsection
@section('custom-css')
<link href="{{asset('vendor/bootstrap-fileinput/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
<link href="{{asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css')}}" media="all" rel="stylesheet" type="text/css"/>
@endsection
@section('main-content')
@if($errors->any())
    <div clss="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('dsnhomhopdong.store')}}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT"/>
    {{csrf_field()}}
    <div class="form-group">
        <label for="NHD_ten">Ten nhom hop dong</label>
        <input type="text" class="form-control" id="NHD_ten" name="NHD_ten" placeholder="ten nhom" value="{{old('NHD_ten')}}">
    </div>
    <div class="form-group">
        <label for="NHD_taoMoi">ngay tao moi nhom hop dong</label>
        <input type="text" class="form-control" id="NHD_taoMoi" name="NHD_taoMoi" placeholder="ngay tao moi nhom" value="{{old('NHD_taoMoi')}}">
    </div>
    <div class="form-group">
        <label for="NHD_capNhat">ngay cap nhat nhom hop dong</label>
        <input type="text" class="form-control" id="NHD_capNhat" name="NHD_capNhat" placeholder="ngay cap nhat nhom" value="{{old('NHD_capNhat')}}">
    </div>
    <select name="NHD_trangThai" class="form-control">
        <option value="1" {{old('NHD_trangThai')==1? "selected": ""}}>khoa</option>
        <option value="2" {{old('NHD_trangThai')==2? "selected": ""}}>kha dung</option>
    </select>
    <button type="submit" class="btn btn-primary">Luu</button>
    <a href="{{route('dsnhomhopdong.index')}}" class="btn btn-primary">Quay lai</a>
</form>
@endsection
@section('custom-scripts')
<script src="{{asset('vendor/bootstrap-fileinput/js/plugins/sortable.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap-fileinput/js/fileinput.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap-fileinput/js/locales/fr.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap-fileinput/themes/fas/theme.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.js')}}" type="text/javascript"></script>

<script src="{{asset('theme/gentelella/vendors/jquery.inputmask/dist/min/inputmask/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('theme/gentelella/vendors/jquery.inputmask/dist/min/inputmask/inputmask.date.extensions.min.js')}}"></script>
<script src="{{asset('theme/gentelella/vendors/jquery.inputmask/dist/min/inputmask/inputmask.extensions.min.js')}}"></script>
<script>
    $(document).ready(function(){
        
    });
</script>
@endsection