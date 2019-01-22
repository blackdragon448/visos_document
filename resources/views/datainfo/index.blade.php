@extends('backend.layouts.index')
@section('title')
DANH SÁCH HỒ SƠ - GIAO DỊCH
@endsection
@section('main-content')
<div class="flash-message">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'. $msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<table border="1px solid black">
    <thead>
        <tr>
            <th>Ngay CC</th>
            <th>So CC</th>
            <th>Loai viec CC</th>
            <th>Noi dung chi tiet</th>
            <th>Cong chung vien</th>
        </tr>
    </thead>
    <tbody>
        @foreach($danhsachdulieu as $datainfo)
            <tr>
                <td>{{$datainfo->d_ngaycc}}</td>
                <td>{{$datainfo->d_socc}}</td>
                <td>{{$datainfo->danhsachhopdong->HD_ten}}</td>
                <td>{{$datainfo->d_noiDungfull}}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection