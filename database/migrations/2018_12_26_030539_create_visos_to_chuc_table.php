<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisosToChucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visos_toChuc', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->unsignedTinyInteger('TC_ma')->autoIncrement()
            ->comment('ma to chuc');
            $table->string('TC_ten', 50)->comment('ten to chuc');
            $table->string('TC_diaChi', 250)->comment('dia chi to chuc');
            $table->string('TC_dienThoai', 12)->comment('dien thoai to chuc');
            $table->string('TC_mail', 50)->comment('email to chuc');
            $table->string('TC_website', 50)->comment('website cua to chuc');

            $table->timestamp('TC_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('thoi gian tao moi to chuc');
            $table->timestamp('TC_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('thoi gian cap nhat to chuc');
            $table->tinyInteger('TC_trangThai')->default('2')
            ->comment('trang thai to chuc: 1_khoa, 2_kha dung');
        });
        DB::statement("ALTER TABLE `visos_toChuc` comment'to chuc'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toChuc');
    }
}
