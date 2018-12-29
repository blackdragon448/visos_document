<?php

use Illuminate\Database\Seeder;

class nhomhopdongseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list=[];
        $types=["Nhomchuyennhuong", "Nhomtangcho", "NhomThechap", "NhomUyquyen",
        "Nhomtaisanvochong"];
        sort($types);
        $today=new DateTime('2018-12-27 05:00:00');
        for($i=1;$i<=count($types); $i++){
            array_push($list, [
                'NHD_ma'=>$i,
                'NHD_ten'=>$types[$i-1],
                'NHD_taoMoi'=>$today->format('Y-m-d H:s:i'),
                'NHD_capNhat'=>$today->format('Y-m-d H:s:i')
            ]);
        }
        DB::table('visos_nhomHopdong')->insert($list);
    }
}
