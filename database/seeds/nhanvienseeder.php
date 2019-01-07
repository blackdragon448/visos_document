<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;

class nhanvienseeder extends Seeder
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
        $nPI=new vnPersonalInfo();
        $faker=Faker\Factory::create('vi_VN');
        $hinh=array('nhanvien1.jpg', 'nhanvien2.jpg', 'nhanvien3.jpg', 'nhanvien4.jpg');
        $today=new DateTime('2018-12-27 09:00:00');
        array_push($list, [
            'NV_ten'=>"Nguyen".$i,
            'NV_namSinh'=>$today->format('Y-m-d H:i:s'),
            'NV_chungMinh'=>$i,
            'NV_diaChi'=>"unknown",
            'NV_dienThoai'=>"0123456789",
            'NV_mail'=>"unknown@gmail.com",
            'NV_ưebsite'=>"visos_document.com.vn",
            'NV_hinhAnh'=>$faker->randomElements($hinh)[0],
            'NV_user'=>"unknown",
            'NV_password'=>bcrypt('123456'),
            'NV_taoMoi'=>$today->format('Y-m-d H:i:s'),
            'NV_capNhat'=>$today->format('Y-m-d H:i:s'),
            'PQ_ma'=>6
        ]);
    }
}
