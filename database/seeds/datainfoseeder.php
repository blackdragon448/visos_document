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
                'd_ngaycc'=>$today->format('Y-m-d H:s:i'),
                'd_socc'=>$i,

            ]);
        }
        DB::table('visos_tenHopdong')->insert($list);
    }
}
