<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhomhd extends Model
{
    const CREATED_AT = 'NHD_taoMoi';
    const UPDATED_AT = 'NHD_capNhat';

    protected $table = 'visos_nhomHopdong';
    protected $fillable = ['NHD_ten', 'NHD_taoMoi', 'NHD_capNhat', 'NHD_trangThai'];
    protected $guarded =['NHD_ma'];

    protected $primaryKey = 'NHD_ma';

    protected $dates =['NHD_taoMoi', 'NHD_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function danhsachhopdong()
    {
        return $this->hasMany('App\danhsachhopdong', 'NHD_ma', 'NHD_ma');
    } 
}
