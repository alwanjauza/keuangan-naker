<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Surat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penetapan' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'no_bukti' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tgl_bukti' => [
                'type' => 'DATE',
            ],
            'masa' => [
                'type' => 'DATE',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 20,
            ],
            'jumlah_bpkud' => [
                'type' => 'INT',
                'constraint' => 20,
            ],
        ]);
        $this->forge->addKey('id_penetapan', true);
        $this->forge->createTable('dokumen_penetapan');
    }

    public function down()
    {
        $this->forge->dropTable('dokumen_penetapan');
    }
}
