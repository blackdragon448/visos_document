<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisosNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visos_nhanVien', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedTinyInteger('NV_ma')->autoIncrement()
            ->comment('ma nhan vien ');
            $table->string('NV_ten', 50)->comment('ten nhan vien');
            $table->string('NV_namSinh', 50)->comment('nam sinh nhan vien');
            $table->string('NV_chungMinh', 12)->comment('chung minh nhan dan nhan vien');
            $table->string('NV_diaChi', 250)->comment('dia chi nhan vien');
            $table->string('NV_dienThoai', 12)->comment('dien thoai nhan vien');
            $table->string('NV_mail', 50)->comment('email nhan vien');
            $table->string('NV_website', 50)->comment('website cua nhan vien');
            $table->string('NV_hinhAnh', 250)->comment('hinh anh cua nhan vien');
            $table->string('NV_user', 50)->comment('tai khoan cua nhan vien');
            $table->string('NV_password', 12)->comment('mat khau cua nhan vien');
            $table->timestamp('NV_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('thoi gian tao moi nhan vien');
            $table->timestamp('NV_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('thoi gian cap nhat nhan vien');
            $table->tinyInteger('NV_trangThai')->default('2')
            ->comment('trang thai nhan vien: 1_khoa, 2_kha dung');
            $table->unsignedTinyInteger('PQ_ma')->comment('ma phan quyen');
            $table->foreign('PQ_ma')->references('PQ_ma')->on('visos_phanQuyen')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `visos_nhanVien` comment'nhan vien'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanVien');
    }
}
