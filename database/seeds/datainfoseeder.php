<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;

class datainfoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list=[];
        $uFN=new VnFullname();
        $uPI=new VnPersonalInfo();
        $faker =Faker\Factory::create('vi_VN');
        for ($i=1; $i <=30; $i++){
            $today=new DateTime();
            array_push($list, [
                'd_ma'=>$i,
                'd_ngaycc'=>$today->format('Y-m-d'),
                'd_socc'=>$i,
                'd_noiDungA'=>"noi dung A",
                'd_noiDungB'=>"noi dung B",
                'd_noiDungC'=>"noi dung C",
                'd_noiDungfull'=>"noi dung full",
                'd_taiSan'=>"noi dung tai san",
                'd_ngayTao'=>$today->format('Y-m-d H:s:i'),
                'd_capNhat'=>$today->format('Y-m-d H:s:i'),
                'd_trangThai'=>1,
                'NHD_ma'=>$faker->numberBetween(1,5),
                'HD_ma'=>$i,
                'NV_ma'=>$i,

            ]);
        }
        DB::table('visos_datainfo')->insert($list);
    }
}
