@extends('backend.layouts.index')
@section('title')
Danh sach ten hop dong
@endsection
@section('main-content')
<div class="flash-message">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'.$msg)}}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>

<a href="{{route('danhsachhopdong.create')}}" class="btn btn-primary">Them moi hop dong</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Ma hop dong</th>
            <th>Ten hop dong</th>
            <th>Tao moi</th>
            <th>Cap nhat</th>
            <th>Nhom hop dong</th>
            <th>Sua</th>
            <th>Xoa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dshopdong as $ds)
            <tr>
                <td>{{$ds->HD_ma}}</td>
                <td>{{$ds->HD_ten}}</td>
                <td>{{$ds->HD_taoMoi}}</td>
                <td>{{$ds->HD_capNhat}}</td>
                <!-- <td>{{$ds->nhomhd->NHD_ten}}</td> -->
                <td><a href="{{route('danhsachhopdong.edit', ['id'=>$ds->HD_ma])}}" class="btn btn-primary pull-left">Sua</a></td>
                <form method="post" action="{{route('danhsachhopdong.destroy', ['id'=>$ds->HD_ma])}}" class="btn btn-primary">
                    <input type="hidden" name="_method" value="DELETE"/>
                    {{csrf_filed()}}
                    <button type="submit" class="btn btn-danger">Xoa</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
