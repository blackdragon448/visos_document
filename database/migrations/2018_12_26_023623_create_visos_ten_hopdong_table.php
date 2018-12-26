<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisosTenHopdongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visos_tenHopdong', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedTinyInteger('HD_ma')->autoIncrement()
            ->comment('hop dong ma');
            $table->string('HD_ten', 50)->comment('ten hop dong');
            $table->timestamp('HD_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('thoi gian tao moi hop dong');
            $table->timestamp('HD_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('thoi gian cap nhat hop dong');
            $table->tinyInteger('HD_trangThai')->default('2')
            ->comment('trang thai hop dong: 1_khoa, 2_kha dung');
            $table->unique(['HD_ten']);
        });
        DB::statement("ALTER TABLE `visos_tenHopdong` comment'ten hop dong'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visos_tenHopdong');
    }
}
