<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->char('nim', '8')->unique();
            $table->string('nama', '100');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->text('alamat');
            $table->integer('id_agama')->unsigned();
            $table->text('quote');
            $table->text('filename');
            $table->integer('id_kelas')->unsigned();
            $table->integer('id_semester')->unsigned();
            $table->integer('id_jabatan')->unsigned();
            $table->string('username','20')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->nullable();
            $table->enum('status', ['1','0']);
            $table->string('created_by', '20')->nullable();
            $table->string('updated_by', '20')->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
}
