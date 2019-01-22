@extends('backend.layouts.index')
@section('title')
Thêm mới phân quyền
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
<form method="post" action="{{route('dsphanquyen.store')}}" enctype="multipar/form-data">
    {{csrf_field()}}
    
    <div class="form-group">
        <label for="PQ_ten">Tên phân quyền</label>
        <input type="text" class="form-control" id="PQ_ten" name="PQ_ten" value="{{old('PQ_ten')}}">
    </div>
    <div class="form-group">
        <label for="PQ_taoMoi">Ngày tạo</label>
        <input type="text" class="form-control" id="PQ_taoMoi" name="PQ_taoMoi" value="{{old('PQ_taoMoi')}}" data-mask-datetime>
    </div>
    <div class="form-group">
        <label for="PQ_capNhat">Ngày cập nhật</label>
        <input type="text" class="form-control" id="PQ_capNhat" name="PQ_capNhat" value="{{old('PQ_capNhat')}}" data-mask-datetime>
    </div>
    <select name="PQ_trangThai" class="form-control">
        <option value="1" {{old('PQ_trangThai')==1? "selected": ""}}>Khoa</option>
        <option value="2" {{old('PQ_trangThai')==2? "selected": ""}}>Kha dung</option>
    </select>
    <button type="submit" class="btn btn-primary">Luu</button>
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
