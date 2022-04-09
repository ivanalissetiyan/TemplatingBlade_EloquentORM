<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('players', function (Blueprint $table) {
            $table
            ->foreign('clubs_id', 'clubs_id_fk2')
            ->references('id')
            ->on('clubs')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->dropForeign('clubs_id_fk2');
        });
    }
}


// Schema::table('detail_user', function (Blueprint $table) {
//             $table->foreign('user_id', 'fk_detail_user_to_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE'); 
//             $table->foreign('type_user_id', 'fk_detail_user_to_type_user')->references('id')->on('type_user')->onUpdate('CASCADE')->onDelete('CASCADE');
//         });