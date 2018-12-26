<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisosPhanQuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visos_phanQuyen', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedTinyInteger('PQ_ma')->autoIncrement()
            ->comment('phan quyen ma');
            $table->string('PQ_ten', 50)->comment('phan quyen nhan vien');
            $table->timestamp('PQ_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('thoi gian tao moi quyen');
            $table->timestamp('PQ_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('thoi gian cap nhat phan quyen');
            $table->tinyInteger('PQ_trangThai')->default('2')
            ->comment('trang thai hop dong: 1_khoa, 2_kha dung');
            $table->unique(['PQ_ten']);
        });
        DB::statement("ALTER TABLE `visos_phanQuyen` comment'phan quyen nhan vien'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phanQuyen');
    }
}
