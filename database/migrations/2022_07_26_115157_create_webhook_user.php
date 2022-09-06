<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Database\Migrations\BaseMigration;

class CreateWebhookUser extends BaseMigration
{
    public $migrationScope = 'database';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $password = Str::random();

        $env = File::get('/etc/nmsprime/env/global.env');
        $env .= "WEBHOOK_PASSWORD={$password}\n";
        File::put('/etc/nmsprime/env/global.env', $env);

        DB::table('users')->insert(['first_name' => 'web', 'last_name' => 'hook', 'login_name' => 'webhook', 'email' => 'someone@example.com', 'password' => Hash::make($password)]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->where('email', 'someone@example.com')->delete();
    }
}
