<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    const CREATED_AT = 'NV_taoMoi';
    const UPDATED_AT = 'NV_capNhat';

    protected $table = 'visos_nhanvien';
    protected $fillable = ['NV_ten', 'NV_namSinh', 'NV_chungMinh', 'NV_daiChi', 'NV_dienThoai', 'NV_mail', 'NV_website', 'NV_hinhAnh', 'NV_user', 'NV_password', 'NV_taoMoi', 'NV_capNhat', 'NV_trangThai', 'PQ_ma'];
    protected $guarded =['NV_ma'];

    protected $primaryKey = 'NV_ma';

    protected $dates =['NV_taoMoi', 'NV_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function danhsachphanquyen()
    {
        return $this->hasMany('App\phanquyen', 'NV_ma', 'NV_ma');
    }
}

