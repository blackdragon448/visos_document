@extends('backend.layouts.index')
@section('title')
Them moi nhom hop dong
@endsection
@section('main-content')
<div class="flash-message">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'. $msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="close" dât-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<form method="post" action="{{route('dsnhomhopdong.store')}}" entype="multipart/form-data">
    <div class="form-group">
        <label for="NHD_ten">Ten nhom hop dong</label>
        <input type="text" class="form-control" id="NHD_ten" name="NHD_ten" placeholder="ten nhom" value="{{old('NHD_ten')}}">
    </div>
    <button type="submit" class="btn btn-primary" id="Luu" name="Luu">Luu</button>
    <a href="{{route('dsnhomhopdong.index')}}" class="btn btn-primary">Quay lai</a>
</form>
@endsection