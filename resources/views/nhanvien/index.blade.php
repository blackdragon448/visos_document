@extends('backend.layouts.index')
@section('title')
Danh nhan vien
@endsection
@section('main-content')
<div class="flash-message">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'. $msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="close" dât-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<a href="{{route('danhsachnhanvien.create')}}" class="btn btn-primary">Them moi nhan vien</a>
<table border="1">
    <thead>
        <tr style="text-size: 14px, color: red ">
            <th>ma NV>
            <th>hinh anh</th>
            <th>Ho ten</th>
            <th>Nam sinh</th>
            <th>Chung minh</th>
            <th>Dia chi</th>
            <th>Dien thoai</th>
            <th>Email</th>
            <th>website</th>
            <th>Ngay tao moi</th>
            <th>ngay cap nhat</th>
            <th>Sua</th>
            <th>Xoa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($danhsachnhanvien as $dsnhanvien)
            <tr>
                <td>{{$snhanvien->NV_ma}}</td>
                <td><img src="{{asset('storage/photos/' . $dsnhanvien->NV_hinhAnh)}}" class="img-list"/></td>
                <td>{{$snhanvien->NV_ten}}</td>
                <td>{{$snhanvien->NV_namSinh}}</td>
                <td>{{$snhanvien->NV_chungMinh}}</td>
                <td>{{$snhanvien->NV_diaChi}}</td>
                <td>{{$snhanvien->NV_dienThoai}}</td>
                <td>{{$snhanvien->NV_mail}}</td>
                <td>{{$snhanvien->NV_website}}</td>
                <td>{{$snhanvien->NV_taoMoi}}</td>
                <td>{{$snhanvien->NV_capNhat}}</td>
                <td><a href="{{route('danhsachnhanvien.edit', ['id'=>$dsnhanvien->NV_ma])}}" class="btn btn-primary">Sua</td>
                <td>
                    <form method="post" action="{{route('danhsachnhanvien.destroy',['id'=>$dsnhanvien->NV_ma])}}">
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