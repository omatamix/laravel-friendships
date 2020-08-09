<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendshipsGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('friendships.tables.fr_groups_pivot'), function (Blueprint $table) {
            $table->unsignedBigInteger('friendship_id');
            $table->morphs('friend');
            $table->unsignedInteger('group_id');
            $table->foreign('friendship_id')
                ->references('id')
                ->on(config('friendships.tables.fr_pivot'))
                ->onDelete('cascade');
            $table->unique(['friendship_id', 'friend_id', 'friend_type', 'group_id'], 'unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('friendships.tables.fr_groups_pivot'));
    }
}
