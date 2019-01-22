@extends('backend.layouts.index')
@section('title')
Danh sách nhóm phân quyền
@endsection
@section('main-content')
<div class="flash-message">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'. $msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<table border="1">
    <thead>
        <tr style="text-size: 14px, color: red ">
            <th>Mã phân quyền</th>
            <th>Tên phân quyền</th>
            <th>Sửu</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dsphanquyen as $phanquyen)
            <tr>
                <td>{{$phanquyen->PQ_ma}}</td>
                <td>{{$phanquyen->PQ_ten}}</td>
                <td><a href="{{route('dsphanquyen.edit', ['id'=>$phanquyen->PQ_ma])}}" class="btn btn-primary">Sua</td>
                <td>
                    <form method="post" action="{{route('dsphanquyen.destroy',['id'=>$phanquyen->PQ_ma])}}">
                    <input type="hidden" name="_method" value="DELETE"/>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger">Xoa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{route('dsphanquyen.create')}}" name="Them Moi" class="btn btn-primary">Thêm mới</a>
<button type="submit" class="btn btn-primary">Thoat</button>

@endsection