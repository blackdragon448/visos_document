<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisosDatainfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visos_datainfo', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedBigInteger('d_ma')->comment('ma du lieu');
            $table->dateTime('d_ngaycc')->comment('ngay cong chung');
            $table->string('d_socc')->comment('so cong chung');
            $table->text('d_noiDungA')->comment('noi dung giao dich A');
            $table->text('d_noiDungB')->comment('noi dung giao dich B');
            $table->text('d_noiDungC')->comment('noi dung giao dich C');
            $table->text('d_noiDungfull')->comment('noi dung day du a + b + c');
            $table->text('d_taiSan')->comment('tai san giao dich');
            $table->timestamp('d_ngayTao')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('ngay tao du lieu');
            $table->timestamp('d_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('ngay cap nhat du lieu');
            $table->tinyInteger('d_trangThai')->default('2')->comment('trang thai tao ho so: 1-khoa, 2-kha dung');
            $table->unsignedTinyInteger('NHD_ma')->comment('ma nhom hop dong');
            $table->unsignedTinyInteger('HD_ma')->comment('ma hop dong');
            $table->unsignedTinyInteger('TC_ma')->comment('ma to chuc');

            $table->foreign('NV_ma')->references('NV_ma')->on('visos_nhanVien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('NHD_ma')->references('NHD_ma')->on('visos_nhomHopdong')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('HD_ma')->references('HD_ma')->on('visos_tenHopdong')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `visos_datainfo` comment 'thong tin chi tiet du lieu giao dich'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datainfo');
    }
}

