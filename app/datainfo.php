<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datainfo extends Model
{
    const CREATED_AT = 'd_ngayTao';
    const UPDATED_AT = 'd_capNhat';

    protected $table = 'visos_datainfo';
    protected $fillable = ['d_ngaycc', 'd_socc', 'd_chuyenVien', 'd_congChungvien', 'd_noiDungA', 'd_noiDungB', 'd_noiDungC',  'd_taiSan', 'd_noiDungfull', 'd_ngayTao', 'd_capNhat', 'd_trangThai', 'NV_ma', 'NHD_ma', 'HD_ma'];
    protected $guarded =['d_ma'];

    protected $primaryKey = 'd_ma';

    protected $dates =['d_ngayTao', 'd_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function nhomhd()
    {
        return $this->belongsTo('App\nhomhd', 'NHD_ma', 'NHD_ma');
    }
    public function danhsachhopdong()
    {
        return $this->belongsTo('App\danhsachhopdong', 'HD_ma', 'HD_ma');
    } 

    public function nhanvien()
    {
        return $this->hasMany('App\nhanvien', 'NV_ma', 'NV_ma');
    }
}
