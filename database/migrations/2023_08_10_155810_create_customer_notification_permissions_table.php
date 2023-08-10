<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_notification_permissions', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->boolean('is_sms')->default(1);
            $table->boolean('is_email')->default(1);
            $table->boolean('is_notification')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_notification_permissions');
    }
};
