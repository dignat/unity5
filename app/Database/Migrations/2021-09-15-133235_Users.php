<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
      $this->forge->addField([
          'id' => [
              'type' => 'INT',
              'constraint' => 5,
              'unsigned' => true,
              'auto_increment' => true,
          ],
        'first_name' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
            'null' => false
        ],
          'family_name' => [
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null' => false
          ],
          'phone' => [
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null' => false
          ],
          'email' => [
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null' => false,
              'unique' => true
          ],

          'updated_at' => [
              'type' => 'datetime',
              'null' => true,
          ],
          'deleted_at' => [
              'type' => 'datetime',
              'null' => true,
          ],
          'created_at datetime default current_timestamp',

      ]);
      $this->forge->addKey('id', true);
      $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
        //
    }
}
