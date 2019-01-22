@extends('frontend.layouts.index')
@section('title')
Nhap ho so 
@endsection
@section('custom-css')
<link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
@endsection

@section('main-content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('hosoinput.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="NHD_ma">Nhom hop dong</label>
        <select name="NHD_ma" class="form-control">
            @foreach($nhomhd as $nhomhd)
                @if(old('NHD_ma') == $nhomhd->NHD_ma)
                <option value="{{ $nhomhd->NHD_ma }}" selected>{{ $nhomhd->NHD_ten }}</option>
                @else
                <option value="{{ $nhomhd->NHD_ma }}">{{ $nhomhd->NHD_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="HD_ma">danh sach hop dong</label>
        <select name="HD_ma" class="form-control">
            @foreach($danhsachhopdong as $dshopdong)
                @if(old('HD_ma') == $dshopdong->HD_ma)
                <option value="{{ $dshopdong->HD_ma }}" selected>{{ $dshopdong->HD_ten }}</option>
                @else
                <option value="{{ $dshopdong->HD_ma }}">{{ $dshopdong->HD_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="d_ngaycc">ngay cong chung</label>
        <input type="text" class="form-control" id="d_ngaycc" name="d_ngaycc" placeholder="ngay cong chung" value="{{old('d_ngaycc')}}">
    </div>
    <div class="form-group">
        <label for="d_socc">So cong chung</label>
        <input type="text" class="form-control" id="d_socc" name="d_socc" placeholder="socc" value="{{old('d_socc')}}">
    </div>
    <div class="form-group">
        <label for="d_noiDungA">Ben A</label>
        <input type="text" class="form-control" id="d_noiDungA" name="d_noiDungA" placeholder="noiDungA" value="{{old('d_noiDungA')}}">
    </div>
    <div class="form-group">
        <label for="d_noiDungB">Ben B</label>
        <input type="text" class="form-control" id="d_noiDungB" name="d_noiDungB" placeholder="noiDungB" value="{{old('d_noiDungB')}}">
    </div>
    <div class="form-group">
        <label for="d_noiDungB">Ben C</label>
        <input type="text" class="form-control" id="d_noiDungC" name="d_noiDungC" placeholder="noiDungC" value="{{old('d_noiDungC')}}">
    </div>
    <div class="form-group">
        <label for="d_taiSan">Tai san</label>
        <input type="text" class="form-control" id="d_taiSan" name="d_taiSan" placeholder="taiSan" value="{{old('d_taiSan')}}">
    </div>
    <div class="form-group">
        <label for="d_ngayTao">ngay tao moi</label>
        <input type="text" class="form-control" id="d_ngayTao" name="d_ngayTao" placeholder="ngay tao moi" value="{{old('d_ngayTao')}}">
    </div>
    <div class="form-group">
        <label for="d_capNhat">ngay cap nhat</label>
        <input type="text" class="form-control" id="d_capNhat" name="d_capNhat" placeholder="ngay cap nhat nhan vien" value="{{old('d_capNhat')}}">
    </div>
    <select name="sp_trangThai" class="form-control">
        <option value="1" {{ old('sp_trangThai') == 1 ? "selected" : "" }}>Khóa</option>
        <option value="2" {{ old('sp_trangThai') == 2 ? "selected" : "" }}>Khả dụng</option>
    </select>

    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<script src="{{ asset('vendor/bootstrap-fileinput/js/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/locales/fr.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/fas/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>
<!-- <script>
    $(document).ready(function() {
        $("#d_hinhAnh").fileinput({
            theme: 'fas',
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any",
            previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
            overwriteInitial: false
        });
        
    });
</script> -->
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
$(document).ready(function(){
    
});
</script>

@endsection