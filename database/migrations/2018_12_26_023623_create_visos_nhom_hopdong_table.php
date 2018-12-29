<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisosNhomHopdongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visos_nhomHopdong', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedTinyInteger('NHD_ma')->autoIncrement()
            ->comment('hop dong ma');
            $table->string('NHD_ten', 50)->comment('nhom hop dong');
            $table->timestamp('NHD_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('thoi gian tao moi hop dong');
            $table->timestamp('NHD_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('thoi gian cap nhat hop dong');
            $table->tinyInteger('NHD_trangThai')->default('2')
            ->comment('trang thai hop dong: 1_khoa, 2_kha dung');
            $table->unique(['NHD_ten']);
        });
        DB::statement("ALTER TABLE `visos_nhomHopdong` comment'nhom hop dong'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visos_nhomHopdong');
    }
}
