<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAboutProfileTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'image_path' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'alt_text' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('about_profile');

        $this->db->table('about_profile')->insert([
            'id'         => 1,
            'image_path' => 'images/about-profile.png',
            'alt_text'   => 'Kholiq Bagas Kusuma mengenakan blazer oranye',
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('about_profile', true);
    }
}
