<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ModifyUserEmailColumn extends Migration
{
    public function up()
    {
        $this->forge->modifyColumn("users", [
            "email" => [
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
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "unique" => false,
                "null" => true
            ]
        ]);
    }
}
