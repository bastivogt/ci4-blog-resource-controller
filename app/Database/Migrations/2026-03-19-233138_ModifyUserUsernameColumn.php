<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyUserUsernameColumn extends Migration
{
    public function up()
    {
        $this->forge->modifyColumn("users", [
            "username" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "unique" => true,
                "null" => false
            ]
        ]);
    }

    public function down()
    {
        $this->forge->modifyColumn("users", [
            "username" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "unique" => false,
                "null" => true
            ]
        ]);
    }
}

