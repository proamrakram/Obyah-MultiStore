<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('store_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('phone_number')->unique();
            $table->string('image')->nullable();
            $table->enum('social_login_provider', ['facebook', 'google', 'apple'])->nullable();
            $table->enum('user_type', ['admin', 'admin_employee', 'store_admin', 'store_employee'
                , 'customer', 'affiliate_marketer'/*, 'appearance_expert', 'model'*/]);
            $table->enum('gender', ['male', 'female', 'others']);
            $table->string('social_login_provider_code')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('user_status', ['active', 'inactive', 'blocked']); #Noticed
            $table->date('birthdate')->nullable();
            $table->string('password')->nullable();
            $table->integer('postCode')->nullable();
            $table->integer('is_delete')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
