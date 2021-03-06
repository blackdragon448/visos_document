@extends('backend.layouts.index')
@section('title')
DANH SÁCH HỒ SƠ - GIAO DỊCH
@endsection
@section('main-content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2.jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/6.1.0/jquery.mark.min.js"></script>
<link rel="stylesheet" href="https://cdn.dataTables.net/1.10.12/css/jquery.dataTables.min.css">
<script src="https://cdn.dataTables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var table=$('#timdulieu').DataTable();
        table.on("draw",function(){
            var keyword=$('#timdulieu_filter>label:eq(0)>input').val();
            $('#timdulieu').unmark();
            $('#timdulieu').mark(keyword,{});
        });
    });
</script>
<div class="flash-message">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'. $msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<table border="1px solid black" id="timdulieu">
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