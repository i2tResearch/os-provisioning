<?php
/**
 * Copyright (c) NMS PRIME GmbH ("NMS PRIME Community Version")
 * and others – powered by CableLabs. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at:
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

use Illuminate\Database\Schema\Blueprint;
use Modules\ProvVoip\Console\CarrierCodeDatabaseUpdaterCommand;

class CreateCarrierCodeTable extends BaseMigration
{
    // name of the table to create
    protected $tablename = 'carriercode';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablename, function (Blueprint $table) {
            $this->up_table_generic($table);

            $table->string('carrier_code', 4)->unique();
            $table->string('company');
        });

        DB::update('INSERT INTO '.$this->tablename." (carrier_code, company) VALUES('0', '-');");

        // empty csv hash (if exists; to be sure that newly created table will be filled)
        $updater = new CarrierCodeDatabaseUpdaterCommand();
        $updater->clear_hash_file();

        // to fill this table call “php artisan provvoip:update_carrier_code_database“

        return parent::up();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->tablename);
    }
}
