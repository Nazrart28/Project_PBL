<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mahasiswa'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'nim'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'prodi'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'kelas'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'no_telp' => [
                'type'           => 'VARCHAR',
                'constraint'     => 'int',
            ],

            'created_at' => [
                'default'        => 'current timestamp',
                'type'           => 'DATETIME',
                'null'           => 'null',
            ],
            'updated_at' => [

                'type'           => 'DATETIME',
                'null'           => 'null',
            ]
        ]);
        $this->forge->addPrimaryKey('id_mahasiswa');
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
        $this->forge->addKey('id_mahasiswa', true);
        $this->forge->createTable('Mahasiswa', true);
    }
}
