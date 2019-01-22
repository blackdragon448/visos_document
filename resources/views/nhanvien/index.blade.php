@extends('backend.layouts.index')
@section('title')
Danh sách nhân viên
@endsection
@section('main-content')
<div class="flash-message">
    @foreach(['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-'. $msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="close" dât-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<a href="{{route('danhsachnhanvien.create')}}" class="btn btn-primary">Thêm mới</a>
<table align="center">
    <thead>
        <tr style="weight:auto">
            <th>Mã Nhân viên</th>
            <th>Hình đại diện</th>
            <th>Họ và Tên</th>
            <th>Năm sinh</th>
            <th>Chứng Minh</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Email</th>
            <th>website</th>
            <th>Ngày tạo mới</th>
            <th>Ngày cập nhật</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($danhsachnhanvien as $dsnhanvien)
            <tr>
                <td>{{$dsnhanvien->NV_ma}}</td>
                <td><img src="{{asset('storage/photos/' . $dsnhanvien->NV_hinhAnh)}}" class="img-list"/></td>
                <td>{{$dsnhanvien->NV_ten}}</td>
                <td>{{$dsnhanvien->NV_namSinh}}</td>
                <td>{{$dsnhanvien->NV_chungMinh}}</td>
                <td>{{$dsnhanvien->NV_diaChi}}</td>
                <td>{{$dsnhanvien->NV_dienThoai}}</td>
                <td>{{$dsnhanvien->NV_mail}}</td>
                <td>{{$dsnhanvien->NV_website}}</td>
                <td>{{$dsnhanvien->NV_taoMoi}}</td>
                <td>{{$dsnhanvien->NV_capNhat}}</td>
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

<button type="submit" class="btn btn-primary">Thoát</button>

@endsection