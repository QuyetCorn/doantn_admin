<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hang', function (Blueprint $table) {
            
            $table->id();
            $table->string('email', 30)->nullable();
            $table->string('password');
            $table->string('ten', 50);
            $table->string('sdt', 10)->nullable();
            $table->string('dia_chi', 100)->nullable();
            $table->string('hinh_dai_dien')->nullable();
            $table->boolean('bi_khoa')->nullable()->default(false); // just admin, customer not have
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khach_hang');
    }
}
