<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phanquyen extends Model
{
    const CREATED_AT = 'PQ_taoMoi';
    const UPDATED_AT = 'PQ_capNhat';

    protected $table = 'visos_phanquyen';
    protected $fillable = ['PQ_ten', 'PQ_taoMoi', 'PQ_capNhat', 'PQ_trangThai'];
    protected $guarded =['PQ_ma'];

    protected $primaryKey = 'PQ_ma';

    protected $dates =['PQ_taoMoi', 'PQ_capNhat'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function danhsachnhanvien()
    {
        return $this->hasMany('App\danhsachnhanvien', 'PQ_ma', 'PQ_ma');
    } 
}
