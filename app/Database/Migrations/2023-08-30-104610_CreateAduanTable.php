<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAduanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPengaduan'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama'             => ['type' => 'varchar', 'constraint' => 255],
            'email'             => ['type' => 'varchar', 'constraint' => 255],
            'noWhatsapp'             => ['type' => 'varchar', 'constraint' => 255],
            'tujuan'             => ['type' => 'varchar', 'constraint' => 255],
            'pesan'             => ['type' => 'varchar', 'constraint' => 500],
            'created_at'       => ['type' => 'datetime', 'null' => true],
            'updated_at'       => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('idPengaduan', true);
        $this->forge->createTable('aduan', true);
    }

    public function down()
    {
        //
    }
}
