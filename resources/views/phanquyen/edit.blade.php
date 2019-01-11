@extends('backend.layouts.index')
@section('title')
chinh sua nhom phan quyen
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
<form method="post" action="{{route('dsphanquyen.update', ['id'=>$dsphanquyen->PQ_ma])}}" enctype="multipart/form-data"> 
    <input type="hidden" name="_method" value="PUT"/>
    {{csrf_field()}}
    
    <div class="form-group">
        <label for="PQ_ten">phan quyen ten</label>
        <input type="text" class="form-control" id="PQ_ten" name="PQ_ten" placeholder="ten phan quyen" value="{{$dsphanquyen->PQ_ten}}">
    </div>
    <div class="form-group">
        <label for="PQ_taoMoi">ngay tao moi phan quyen</label>
        <input type="text" class="form-control" id="PQ_taoMoi" name="PQ_taoMoi" placeholder="ngay tao moi" value="{{$dsphanquyen->PQ_taoMoi}}">
    </div>
    <div class="form-group">
        <label for="PQ_capNhat">ngay cap nhat phan quyen</label>
        <input type="text" class="form-control" id="PQ_capNhat" name="PQ_capNhat" placeholder="ngay cap nhat" value="{{$dsphanquyen->PQ_capNhat}}">
    </div>
    <select name="PQ_trangThai">
        <option value="1" {{old('PQ_trangThai', $dsphanquyen->PQ_trangThai)==1?"selected":""}}>khoa</option>
        <option value="2" {{old('PQ_trangThai', $dsphanquyen->PQ_trangThai)==2?"selected":""}}>Kha dung</option>
    </select>
    <br/>
    <br/>
    <button type="submit" class="btn btn-primary">Luu</button>
    <a href="{{route('dsphanquyen.index')}}" class="btn btn-primary">Quy lai</a>
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