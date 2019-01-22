<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;
use Illuminate\PhpVnDataGenerator\VnFullname;

class tenhopdongseeder extends Seeder
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
                'HD_ten'=>"Hop_dong $i",
                'HD_capNhat'=>$today->format('Y-m-d H:s:i'),
                'HD_taoMoi'=>$today->format('Y-m-d H:s:i'),
                'HD_trangThai'=>$i,
                'NHD_ma'=>$faker->numberBetween(1,5),
                'HD_ma'=>$i
            ]);
        }
        DB::table('visos_tenHopdong')->insert($list);
    }
}
