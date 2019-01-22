@extends('backend.layouts.index')

@section('title')
Thêm mới nhân viên
@endsection

@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
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

<form method="post" action="{{ route('danhsachnhanvien.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="PQ_ma">Phân quyền nhân viên</label>
        <select name="PQ_ma" class="form-control">
            @foreach($dsphanquyen as $phanquyen)
                @if(old('PQ_ma') == $phanquyen->PQ_ma)
                <option value="{{ $phanquyen->PQ_ma }}" selected>{{ $phanquyen->PQ_ten }}</option>
                @else
                <option value="{{ $phanquyen->PQ_ma }}">{{ $phanquyen->PQ_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="NV_ten">Họ và tên</label>
        <input type="text" class="form-control" id="NV_ten" name="NV_ten" placeholder="Họ và tên" value="{{old('NV_ten')}}">
    </div>
    <div class="form-group">
        <label for="NV_user">Tài khoản</label>
        <input type="text" class="form-control" id="NV_user" name="NV_user" placeholder="user" value="{{old('NV_user')}}">
    </div>
    <div class="form-group">
        <label for="NV_password">Mật khẩu</label>
        <input type="password" class="form-control" id="NV_password" name="NV_password" placeholder="password" value="{{old('NV_password')}}">
    </div>
    <div class="form-group">
        <div class="file-loading">
            <label>Hình đại diện</label>
            <input id="NV_hinhAnh" type="file" name="NV_hinhAnh">
        </div>
    </div>
    <div class="form-group">
        <label for="NV_namSinh">Năm sinh</label>
        <input type="text" class="form-control" id="NV_namSinh" name="NV_namSinh" placeholder="Năm sinh" value="{{old('NV_namSinh')}}">
    </div>
    <div class="form-group">
        <label for="NV_chungMinh">Giấy tờ tùy thân</label>
        <input type="text" class="form-control" id="NV_chungMinh" name="NV_chungMinh" placeholder="Chứng minh/căn cước/hộ chiếu" value="{{old('NV_chungMinh')}}">
    </div>
    <div class="form-group">
        <label for="NV_diaChi">Địa chỉ</label>
        <input type="text" class="form-control" id="NV_diaChi" name="NV_diaChi" placeholder="Địa chỉ" value="{{old('NV_diaChi')}}">
    </div>
    <div class="form-group">
        <label for="NV_dienThoai">Điện thoại</label>
        <input type="text" class="form-control" id="NV_dienThoai" name="NV_dienThoai" placeholder="Điện thoại" value="{{old('NV_dienThoai')}}">
    </div>
    <div class="form-group">
        <label for="NV_mail">Email</label>
        <input type="text" class="form-control" id="NV_mail" name="NV_mail" placeholder="Email" value="{{old('NV_mail')}}">
    </div>
    <div class="form-group">
        <label for="NV_website">Website</label>
        <input type="text" class="form-control" id="NV_website" name="NV_website" placeholder="Website" value="{{old('NV_website')}}">
    </div>
    <div class="form-group">
        <label for="NV_taoMoi">Ngày tạo</label>
        <input type="text" class="form-control" id="NV_taoMoi" name="NV_taoMoi" placeholder="ngay tao moi nhan vien" value="{{today()}}">
    </div>
    <div class="form-group">
        <label for="NV_capNhat">Ngày cập nhật</label>
        <input type="text" class="form-control" id="NV_capNhat" name="NV_capNhat" placeholder="ngay cap nhat nhan vien" value="{{today()}}">
    </div>
    <select name="sp_trangThai" class="form-control">
        <option value="1" {{ old('sp_trangThai') == 1 ? "selected" : "" }}>Khóa</option>
        <option value="2" {{ old('sp_trangThai') == 2 ? "selected" : "" }}>Khả dụng</option>
    </select>

    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<!-- Các script dành cho thư viện bootstrap-fileinput -->
<script src="{{ asset('vendor/bootstrap-fileinput/js/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/locales/fr.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/fas/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $("#NV_hinhAnh").fileinput({
            theme: 'fas',
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any",
            previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
            overwriteInitial: false
        });
        
    });
</script>

<!-- Các script dành cho thư viện Mặt nạ nhập liệu InputMask -->
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
$(document).ready(function(){
    
});
</script>

@endsection