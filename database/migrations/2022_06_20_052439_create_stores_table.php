<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            //IDs && Slugs
            $table->id();
            $table->integer('store_admin');
            $table->foreignId('store_type_id')->constrained();
            $table->string('slug')->unique();
            $table->string('store_type_slug');

            //Names && Descriptions
            $table->string('store_name_ar');
            $table->string('store_name_en');
            $table->string('store_details_en')->nullable();
            $table->string('store_details_ar')->nullable();
            $table->string('store_address_en')->nullable();
            $table->string('store_address_ar')->nullable();
            $table->string('store_logo')->nullable();


            $table->string('store_domain')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();

            $table->integer('store_currency')->nullable();
            $table->integer('store_country');
            $table->integer('store_city');

            $table->string('subscription_start_date')->nullable();
            $table->string('subscription_end_date')->nullable();
            $table->integer('subscription_package_id')->nullable();

            $table->string('commercial_record')->nullable();
            $table->string('registration_number_in_trusted')->nullable();
            $table->string('id_number')->nullable();


            $table->enum('store_status', ['active', 'inactive', 'blocked']);
            $table->enum('is_trail', ['0', '1']);
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
        Schema::dropIfExists('stores');
    }
}
