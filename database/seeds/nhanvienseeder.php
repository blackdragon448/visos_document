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
        for($i=1; $i<=30; $i++){
            $today=new DateTime();
            array_push($list, [
                'NV_ten'=>"Nguyen $i",
                'NV_namSinh'=>$today->format('Y-m-d H:i:s'),
                'NV_chungMinh'=>$i,
                'NV_diaChi'=>"unknown",
                'NV_dienThoai'=>"0123456789",
                'NV_mail'=>"unknown@gmail.com",
                'NV_website'=>"visos_document.com.vn",
                'NV_hinhAnh'=>$faker->randomElements($hinh)[0],
                'NV_user'=>"unknown",
                'NV_password'=>bcrypt('123455678'),
                'NV_taoMoi'=>$today->format('Y-m-d H:i:s'),
                'NV_capNhat'=>$today->format('Y-m-d H:i:s'),
                'PQ_ma'=>$faker->numberBetween(1,6)
            ]);
        }
        DB::table('visos_nhanvien')->insert($list);
    }
}
