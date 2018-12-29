<?php

use Illuminate\Database\Seeder;


class phanquyenseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list=[];
        $categories=["admin", "Truong phong", "Cong chung vien", "chuyen vien", "Luu tru", "thu ky"];
        sort($categories);
        $today=new DateTime('2018-12-26 14:00:00');
        for($i=1; $i<=count($categories); $i++){
            array_push($list, [
                'PQ_ma'=>$i,
                'PQ_ten'=>$categories[$i-1],
                'PQ_taoMoi'=>$today->format('Y-m-d H:i:s'),
                'PQ_capNhat'=>$today->format('Y-m-d H-i-s')
            ]);
        }
        DB::table('visos_phanquyen')->insert($list);
    }
}
