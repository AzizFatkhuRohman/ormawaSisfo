<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDokumenTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idDokumen'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'noSurat'             => ['type' => 'varchar', 'constraint' => 255],
            'namaOrmawa'             => ['type' => 'varchar', 'constraint' => 255],
            'kodeArsip'             => ['type' => 'varchar', 'constraint' => 255],
            'bulan'             => ['type' => 'varchar', 'constraint' => 255],
            'lampiran'             => ['type' => 'varchar', 'constraint' => 255],
            'hal'             => ['type' => 'varchar', 'constraint' => 255],
            'kepada'             => ['type' => 'varchar', 'constraint' => 255],
            'salam'             => ['type' => 'varchar', 'constraint' => 255],
            'deskripsi'             => ['type' => 'varchar', 'constraint' => 500],
            'hariDanTanggal'             => ['type' => 'varchar', 'constraint' => 255],
            'pukul'             => ['type' => 'varchar', 'constraint' => 255],
            'tempat'             => ['type' => 'varchar', 'constraint' => 255],
            'penutup'             => ['type' => 'varchar', 'constraint' => 500],
            'created_at'       => ['type' => 'datetime', 'null' => true],
            'updated_at'       => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('idDokumen', true);
        $this->forge->createTable('dokumenSurat', true);
    }

    public function down()
    {
        //
    }
}
