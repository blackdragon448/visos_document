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
            <th>Ngày công chứng</th>
            <th>Số công chứng</th>
            <th>Tên hợp đồng</th>
            <th>Nội dung chi tiêt</th>
            <th>Công chứng viên</th>
        </tr>
    </thead>
    <tbody>
        @foreach($danhsachdulieu as $datainfo)
            <tr>
                <td>{{$datainfo->d_ngaycc}}</td>
                <td>{{$datainfo->d_socc}}</td>
                <td>{{$datainfo->danhsachhopdong->HD_ten}}</td>
                <td>{{$datainfo->d_noiDungfull}}</td>
                <td>{{$datainfo->nhanvien->NV_ten}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection