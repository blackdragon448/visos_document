@extends('backend.layouts.index')
@section('title')
Tao moi nhan vien
@endsection
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{route('danhsachnhanvien.store', ['id'=>$dsnhanvien->NV_ma])}}" enctype="multipart/form-data"> 
    <input type="hidden" name="_method" value="PUT"/>
    {{csrf_field()}}
    <div class="form-group">
        <label for="PQ_ma">phan quyen tai khoan</label>
        <select name="PQ_ma" class="form-control">
            @foreach($dsphanquyen as $phanquyen)
                @if($phanquyen->PQ_ma==$danhsachnhanvien->PQ_ma)
                <option value="{{$phanquyen->PQ_ma}}" selected> {{$phanquyen->PQ_ten}}</option>
                @else
                <option value="{{$phanquyen->PQ_ma}}"> {{$phanquyen->PQ_ten}}</option>
                @endif
            @endforeach
        </select>

    </div>
    <div class="form-group">
        <label for="NV_ten">ho ten</label>
        <input type="text" class="form-control" id="NV_ten" name="NV_ten" placeholder="ho va ten" value="{{$danhsachnhanvien->NV_ten}}">
    </div>
    <div class="form-group">
        <div class="file-loading">
            <label>hinh dai dien</label>
            <input id="NV_hinhAnh" type="file" name="NV_hinhAnh">
        </div>
    </div>
    <div class="form-group">
        <label for="NV_namSinh">nam sinh</label>
        <input type="text" class="form-control" id="NV_namSinh" name="NV_namSinh" placeholder="nam sinh" value="{{$danhsachnhanvien->NV_namSinh}}">
    </div>
    <div class="form-group">
        <label for="NV_chungMinh">chung minh</label>
        <input type="text" class="form-control" id="NV_chungMinh" name="NV_chungMinh" placeholder="chung minh" value="{{$danhsachnhanvien->NV_chungMinh}}">
    </div>
    <div class="form-group">
        <label for="NV_diaChi">dia chi</label>
        <input type="text" class="form-control" id="NV_diaChi" name="NV_diaChi" placeholder="dia chi" value="{{$danhsachnhanvien->NV_diaChi}}">
    </div>
    <div class="form-group">
        <label for="NV_dienThoai">Dien Thoai</label>
        <input type="text" class="form-control" id="NV_dienThoai" name="NV_dienThoai" placeholder="Dien Thoai" value="{{$danhsachnhanvien->NV_dienThoai}}">
    </div>
    <div class="form-group">
        <label for="NV_mail">Email</label>
        <input type="text" class="form-control" id="NV_mail" name="NV_mail" placeholder="Email" value="{{$danhsachnhanvien->NV_mail}}">
    </div>
    <div class="form-group">
        <label for="NV_website">Website</label>
        <input type="text" class="form-control" id="NV_website" name="NV_website" placeholder="Website" value="{{$danhsachnhanvien->NV_website}}">
    </div>
    <div class="form-group">
        <label for="NV_taoMoi">ngay tao moi nhan vien</label>
        <input type="text" class="form-control" id="NV_taoMoi" name="NV_taoMoi" placeholder="ngay tao moi nhan vien" value="{{$danhsachnhanvien->NV_taoMoi}}">
    </div>
    <div class="form-group">
        <label for="NV_capNhat">ngay cap nhat nhan vien</label>
        <input type="text" class="form-control" id="NV_capNhat" name="NV_capNhat" placeholder="ngay cap nhat nhan vien" value="{{$danhsachnhanvien->NV_capNhat}}">
    </div>
    <select name="NV_trangThai">
        <option value="1" {{old('NV_trangThai', $danhsachnhanvien->NV_trangThai)==1?"selected":""}}>khoa</option>
        <option value="2" {{old('NV_trangThai', $danhsachnhanvien->NV_trangThai)==2?"selected":""}}>Kha dung</option>
    </select>
    <br/>
    <br/>
    <button type="submit" class="btn btn-primary">Luu</button>
    <a href="{{route('danhsachnhanvien.index')}}" class="btn btn-primary">Quy lai</a>
</form>

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