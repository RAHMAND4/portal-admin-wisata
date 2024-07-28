<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TourDatabase extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'nama_wisata'   => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'description'    => [
                'type' => 'TEXT',
            ],
            'location'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'price'          => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'available_seats' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'image_url'      => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'rating'         => [
                'type'       => 'FLOAT',
                'constraint' => '2,1',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tour');
    }

    public function down()
    {
        $this->forge->dropTable('tour');
    }
}
