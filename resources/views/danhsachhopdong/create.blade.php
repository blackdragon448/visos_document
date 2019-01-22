@extends('backend.layouts.index')
@section('title')
Thêm mới hợp đồng
@endsection
@section('custom-css')
<link href="{{asset('vendor/bootstrap-fileinput/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
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
<form method="post" action="{{route('danhsachhopdong.store')}}" enctype="multipar/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <label for="NHD_ma">Nhóm hợp đồng</label>
        <select name="NHD_ma" class="form-control">
            @foreach($dsnhomhopdong as $nhomhd)
                @if(old('NHD_ma')==$nhomhd->NHD_ma)
                <option value="{{$nhomhd->NHD_ma}}" selected>{{$nhomhd->NHD_ten}}</option>
                @else
                <option value="{{$nhomhd->NHD_ma}}">{{$nhomhd->NHD_ten}}</option>
                @endif
            @endforeach
        </select>

    </div>
    <div class="form-group">
        <label for="HD_ten">Tên hợp đồng</label>
        <input type="text" class="form-control" id="HD_ten" name="HD_ten" value="{{old('HD_ten')}}">
    </div>
    <div class="form-group">
        <label for="HD_taoMoi">Ngày tạo</label>
        <input type="text" class="form-control" id="HD_taoMoi" name="HD_taoMoi" value="{{today()}}" data-mask-datetime>
    </div>
    <div class="form-group">
        <label for="HD_capNhat">Ngày cập nhật</label>
        <input type="text" class="form-control" id="HD_capNhat" name="HD_capNhat" value="{{today()}}" data-mask-datetime>
    </div>
    <select name="HD_trangThai" class="form-control">
        <option value="1" {{old('HD_trangThai')==1? "selected": ""}}>Khoa</option>
        <option value="2" {{old('HD_trangThai')==2? "selected": ""}}>Kha dung</option>
    </select>
    <button type="submit" class="btn btn-primary">Lưu</button>
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
