<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserIdToPostsTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn("posts", [
            "user_id" => [
                "type" => "INT",
                "unsigned" => true,
                "null" => true, 
                "after" => "id"
            ]
        ]);

        $this->forge->addForeignKey("user_id", "users", "id", "CASCADE", "CASCADE");
    }

    public function down()
    {
        $this->forge->dropColumn("posts", "user_id");
        $this->forge->dropForeignKey("posts", "user_id");
    }
}


