@extends('frontend.layouts.index')
@section('title')
Danh sach ho so - visos_document
@endsection
@section('custom-css')
<style>
    a {
        color: #0254EB
    }
    a:visited {
        color: #0254EB
    }
    a.morelink{
        text-decoration: none;
        outline: none;
    }
    .morecontent span{
        display: none;
    }
    .comment{
        width: 200px;
        background-color: #f0f0f0;
        margin: 10px;
        padding: 10px;
    
    }
    .hightlight{
        background: yellow;
        font-weight: bold;
    
    }
    mark{
        padding: 0px;
        background: yellow;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/6.1.0/jquery.mark.min.js"></script>
<link rel="https://cdn.dataTables.net/1.10.12/css/jquery.dataTables.min.css">
<script src="https://cdn.dataTable.net/1.10.12/js/jquery.dataTables.min.js"></script>
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

@endsection
@section('main-content')
<div class="flash-message">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'. $msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<div class="form-group">
    <ul>
        <label id="search">Thông tin tìm kiếm</label>
        <input type="text" name="search" id="search" placeholder="Thông tin tìm kiếm" class="form-control">
        <input type="submit" id="search" class="btn btn-primary" name="tim kiem">
    </ul>
</div>
<table border="1px solid black" id="datainfo">
    <thead>
        <tr>
            <th>Ngày công chứng</th>
            <th>Ngày nhập hệ thống</th>
            <th>Số công chứng</th>
            <th>Tên hợp đồng</th>
            <th>Nội dung chi tiết</th>
            <th>Công chứng viên</th>
        </tr>
    </thead>
    <tbody>
        @foreach($danhsachdulieu as $datainfo)
            <tr>
                <td>{{$datainfo->d_ngaycc}}</td>
                <td>{{$datainfo->d_ngayTao}}</td>
                <td>{{$datainfo->d_socc}}</td>
                <td>{{$datainfo->danhsachhopdong->HD_ten}}</td>
                <td class="comment" align="justify">{{$datainfo->d_noiDungfull}}</td>
                <td>{{$datainfo->nhanvien->NV_ten}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $danhsachdulieu->links() }}
@endsection
@section('custom-scripts')
<script src="{{asset('js/jquery-2.2.3.js')}}"></script>
<script src="{{ asset('http://code.jquery.com/jquery-latest.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/jquery.shorten.1.0.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.hightlight.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dataTables.searchHigthlight.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(".comment").shorten({
        "showChars":200,
        "moreText":"xem thêm",
        "lessText":"Rút gọn",
    });
</script>

@endsection