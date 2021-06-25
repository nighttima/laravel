<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_role', function (Blueprint $table) {
            $table->integer('admin_id')->unsigned();
            $table->integer('role_id')->unsigned()->default(1);
            $table->foreign('admin_id')->references('id')->on('admins')
                ->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_role', function (Blueprint $table) {
            $table->dropForeign(['admin_id']);
            $table->dropForeign(['role_id']);
        });
        Schema::dropIfExists('admin_role');
    }
}
