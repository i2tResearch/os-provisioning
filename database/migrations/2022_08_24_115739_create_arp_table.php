<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateArpTable extends BaseMigration
{
    public $migrationScope = 'database';

    protected $tableName = 'arp';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $this->up_table_generic($table);
            $table->string('type')->nullable();
            $table->string('interface')->nullable();
            // name = display key of NCS
            $table->string('name')->nullable();
            $table->string('mac')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->integer('netelement_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}