<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;


class tochucseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
    $list=[];
    $tochuccc=["VPCC Nguyen Van A", "VPCC Nguyen Van B", "VPCC Nguyen Van C", "VPCC Nguyen Van D", "VPCC Nguyen Van E", "VPCC Nguyen Van F"];
    sort($tochuccc);
    $today=new DateTime('2018-12-27 9:00:00');
    for($i=1; $i<= count($tochuccc); $i++){
       
        array_push($list, [
            'TC_ma'=>$i,
            'TC_ten'=>$tochuccc[$i-1],
            'TC_diaChi'=>$i,
            'TC_dienThoai'=>$i,
            'TC_mail'=>$i,
            'TC_website'=>$i,
            'TC_taoMoi'=>$today->format('Y-m-d H:i:s'),
            'TC_CapNhat'=>$today->format('Y-m-d H:i:s')
        ]);

    }
    DB::table('visos_toChuc')->insert($list);
    }
}
