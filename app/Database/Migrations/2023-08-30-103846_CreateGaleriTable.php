<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGaleriTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idGaleri'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'penulis'             => ['type' => 'varchar', 'constraint' => 255],
            'judul'             => ['type' => 'varchar', 'constraint' => 255],
            'gambar'             => ['type' => 'varchar', 'constraint' => 255],
            'deskripsi'             => ['type' => 'varchar', 'constraint' => 500],
            'created_at'       => ['type' => 'datetime', 'null' => true],
            'updated_at'       => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('idGaleri', true);
        $this->forge->createTable('galeri', true);
    }

    public function down()
    {
        //
    }
}
