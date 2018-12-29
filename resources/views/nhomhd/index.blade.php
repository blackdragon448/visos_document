@extends('backend.layouts.index')
@section('title')
Danh sach nhom hop dong
@endsection
@section('main-content')
<div class="flash-message">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'. $msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="close" dât-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<table border="1">
    <thead>
        <tr style="text-size: 14px, color: red ">
            <th>ma</th>
            <th>ten nhom HD</th>
            <th>Sua</th>
            <th>Xoa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dsnhomhopdong as $nhomhd)
            <tr>
                <td>{{$nhomhd->NHD_ma}}</td>
                <td>{{$nhomhd->NHD_ten}}</td>
                <td><a href="{{route('dsnhomhopdong.edit', ['id'=>$nhomhd->NHD_ma])}}" class="btn btn-primary">Sua</td>
                <td>
                    <form method="post" action="{{route('dsnhomhopdong.destroy',['id'=>$nhomhd->NHD_ma])}}">
                    <input type="hidden" name="_method" value="DELETE"/>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger">Xoa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{route('dsnhomhopdong.create')}}" name="Them Moi" class="btn btn-primary">Them moi</a>
<button type="submit" class="btn btn-primary">Thoat</button>

@endsection