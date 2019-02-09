<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Settings as MSettings;

class Settings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function(Blueprint $table) {
            $table -> string('name', 191);
            $table -> text('value');
        });

        /* Create default global settings */
        MSettings::insert([
            [
                'name' => 'regkey',
                'value' => '1234567890',
            ],
            [
                'name' => 'contact',
                'value' => '{}',
            ],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
