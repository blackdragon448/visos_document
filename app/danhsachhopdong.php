<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhsachhopdong extends Model
{
    const UPDATED_AT = 'HD_capNhat';
    const CREATED_AT = 'HD_taoMoi';

    protected $table ='visos_tenhopdong';
    protected $fillable = ['HD_ten', 'HD_taoMoi', 'HD_capNhat', 'HD_trangThai', 'NHD_ma'];
    protected $guarded =['HD_ma'];
    protected $primaryKey ='HD_ma';
    protected $dates =['HD_taoMoi', 'HD_capNhat'];
    protected $dateFormat ='Y-m-d H:i:s';
    public function nhomhd()
    {
        return $this->belongsTo('App\nhomhd', 'NHD_ma', 'NHD_ma');
        
    }

}
