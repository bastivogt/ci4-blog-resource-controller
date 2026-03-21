<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "unsigned" => true,
                "auto_increment" => true
            ],
            "title" => [
                "type" => "VARCHAR",
                "constraint" => 255
            ],
            "content" => [
                "type" => "TEXT",
                "null" => true
            ],
            "published" => [
                "type" => "BOOL",
                "default" => false
            ],
            "created_at" => [
                "type" => "DATETIME",
                "null" => true
            ],
            "updated_at" => [
                "type" => "DATETIME",
                "null" => true
            ]
        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable("posts");
    }

    public function down()
    {
        $this->forge->dropTable("posts");
    }
}
