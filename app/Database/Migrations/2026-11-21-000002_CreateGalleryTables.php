<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGalleryTables extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'section' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'sort_order' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
                'default'    => 0,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey(['section', 'slug']);
        $this->forge->createTable('project_galleries');

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'gallery_id' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
            'image_path' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'alt_text' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'sort_order' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
                'default'    => 0,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('gallery_id');
        $this->forge->createTable('gallery_images');

        $galleries = [
            ['portofolio', 'brand-identity', 'Identitas Brand', 'Eksplorasi logo, warna, dan tampilan visual untuk sebuah brand.', 1],
            ['portofolio', 'ui-ux-design', 'Desain Aplikasi', 'Rancangan antarmuka aplikasi yang sederhana dan mudah digunakan.', 2],
            ['portofolio', 'photography', 'Fotografi', 'Kumpulan foto dengan fokus pada komposisi, suasana, dan cerita.', 3],
            ['portofolio', 'digital-artwork', 'Karya Digital', 'Eksperimen visual digital dengan warna dan bentuk yang ekspresif.', 4],
            ['work', 'brand-identity', 'Identitas visual', 'Logo, palet warna, dan arah visual sebuah brand.', 1],
            ['work', 'photography', 'Fotografi', 'Permainan cahaya dan komposisi untuk bercerita.', 2],
            ['work', 'editorial-design', 'Desain editorial', 'Tata letak dan tipografi untuk menyampaikan ide.', 3],
            ['work', 'digital-artwork', 'Karya digital', 'Eksperimen bentuk, warna, dan antarmuka digital.', 4],
        ];

        foreach ($galleries as [$section, $slug, $title, $description, $sortOrder]) {
            $this->db->table('project_galleries')->insert([
                'section'     => $section,
                'slug'        => $slug,
                'title'       => $title,
                'description' => $description,
                'sort_order'  => $sortOrder,
            ]);
        }
    }

    public function down()
    {
        $this->forge->dropTable('gallery_images', true);
        $this->forge->dropTable('project_galleries', true);
    }
}
