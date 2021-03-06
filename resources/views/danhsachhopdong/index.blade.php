@extends('backend.layouts.index')
@section('title')
Danh sách hợp đồng
@endsection
@section('custom-css')
<!-- <link href="{{asset('vendor/bootstrap-fileinput/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" crossorigin="anonymous"> -->

@section('main-content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/6.1.0/jquery.mark.min.js"></script>
<link rel="https://cdn.dataTables.net/1.10.12/css/jquery.dataTables.min.css">
<script src="https://cdn.dataTables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var $('#datainfo').DataTable();
        table.on=$("draw", function(){
            var keyword=$('#datainfo>label:eq(0)>input').val();

            $('#datainfo').unmark();
            $('#datainfo').mark(keyword,{});
        });
    });
</script>
<style>
    mark{
        padding:0px;
        background: yellow;
    }
</style>
<div class="flash-message">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'. $msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="close" dât-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<a href="{{route('danhsachhopdong.create')}}" name="Them Moi" class="btn btn-primary">Them moi</a>
<table id="datatinfo">
    <thead>
        <tr>
            <th>Mã hợp đồng</th>
            <th>Tên hợp đồng</th>
            <th>Nhóm hợp đồng</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Sửa</th>
            <th>Xóa</th>
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