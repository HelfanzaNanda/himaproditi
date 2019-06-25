<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyOnTableAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anggotas', function (Blueprint $table){
            $table->foreign('id_agama')->references('id')->on('agamas')->onDelete('CASCADE');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('CASCADE');
            $table->foreign('id_semester')->references('id')->on('semesters')->onDelete('CASCADE');
            $table->foreign('id_jabatan')->references('id')->on('jabatans')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
