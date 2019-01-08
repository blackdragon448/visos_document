@extends('backend.layouts.index')
@section('title')
Danh sach ten hop dong
@endsection
@section('custom-css')
<link href="{{asset('vendor/bootstrap-fileinput/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" crossorigin="anonymous">

@section('main-content')
<div class="flash-message">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'. $msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="close" dât-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<a href="{{route('danhsachhopdong.create')}}" name="Them Moi" class="btn btn-primary">Them moi</a>
<table border="1">
    <thead>
        <tr style="text-size: 14px, color: red ">
            <th>ma hop dong</th>
            <th>ten hop dong</th>
            <th>nhom hop dong</th>
            <th>Ngay tao</th>
            <th>Cap nhat</th>
            <th>Sua</th>
            <th>Xoa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($danhsachhopdong as $dshopdong)
            <tr>
                <td>{{$dshopdong->HD_ma}}</td>
                <td>{{$dshopdong->HD_ten}}</td>
                <td>{{$dshopdong->nhomhd->NHD_ten}}</td>
                <td>{{$dshopdong->HD_taoMoi}}</td>
                <td>{{$dshopdong->HD_capNhat}}</td>
                <td><a href="{{route('danhsachhopdong.edit', ['id'=>$dshopdong->HD_ma])}}" class="btn btn-primary">Sua</td>
                <td>
                    <form method="post" action="{{route('danhsachhopdong.destroy',['id'=>$dshopdong->HD_ma])}}">
                    <input type="hidden" name="_method" value="DELETE"/>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger">Xoa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<button type="submit" class="btn btn-primary">Thoat</button>

@endsection