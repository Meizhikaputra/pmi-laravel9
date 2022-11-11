<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jeniskelamin');
            $table->string('tanggallahir');
            $table->string('alamatrumah');
            $table->string('notelepon');
            $table->string('golongandarah');
            $table->string('donorkeberapa');
            $table->string('macamdonor');
            $table->string('tempatdonor');
            $table->string('umur');
            $table->string('pendaftaran');


            $table->string('tekanandarah')->default('belum');
            $table->string('beratbadan')->default('belum');
            $table->string('rhesus')->default('belum');
            $table->string('ditolak')->default('belum');
            $table->string('ujisaring')->default('belum');
            $table->string('nokantong')->default('belum');
            $table->boolean('status')->default(false);
            $table->string('tanggal');
            $table->string('bulan');
            $table->string('pertanyaan1')->default('tidak');
            $table->string('pertanyaan2')->default('tidak');
            $table->string('pertanyaan3')->default('tidak');
            $table->string('pertanyaan4')->default('tidak');
            $table->string('pertanyaan5')->default('tidak');
            $table->string('pertanyaan6')->default('tidak');
            $table->string('pertanyaan7')->default('tidak');
            $table->string('pertanyaan8')->default('tidak');
            $table->string('pertanyaan9')->default('tidak');
            $table->string('pertanyaan10')->default('tidak');
            $table->string('pertanyaan11')->default('tidak');
            $table->string('pertanyaan12')->default('tidak');
            $table->string('pertanyaan13')->default('tidak');
            $table->string('pertanyaan14')->default('tidak');
            $table->string('pertanyaan15')->default('tidak');
            $table->string('pertanyaan16')->default('tidak');
            $table->string('pertanyaan17')->default('tidak');
            $table->string('pertanyaan18')->default('tidak');
            $table->string('pertanyaan19')->default('tidak');
            $table->string('pertanyaan20')->default('tidak');
            $table->string('pertanyaan21')->default('tidak');
            $table->string('pertanyaan22')->default('tidak');
            $table->string('pertanyaan23')->default('tidak');
            $table->string('pertanyaan24')->default('tidak');

            $table->string('namapasien')->default('belum');
            $table->string('tanggalambil')->default('belum');
            $table->string('rumahsakit')->default('belum');
            $table->string('donorsukarela')->default('belum');
            $table->string('darahkeluar')->default('belum');
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
        Schema::dropIfExists('donors');
    }
};
