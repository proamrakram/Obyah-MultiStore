<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('add_image');
            $table->enum('ads_type',['pop_up_window','side_window']);
            $table->enum('ads_place',['left','right','left_bottom','right_bottom','left_top','right_top','left_center'
            ,'right_center','center_bottom','center_top']);
            $table->integer('store_id')->nullable(); // null if for website
            $table->string('link');
            $table->enum('status', ['active', 'inactive', 'blocked']);
            $table->integer('is_delete')->default(0);
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
        Schema::dropIfExists('advertisements');
    }
}
