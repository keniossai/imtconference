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
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('enrol_id')->nullable()->constrained();

            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('reg_number')->unique()->nullable();
            $table->string('photo')->nullable();

            $table->enum('gender', ['M', 'F'])->nullable();
            $table->string('organization')->nullable();
            $table->string('designation')->nullable();
            $table->year('year_of_call')->nullable();

            $table->boolean('is_admin')->nullable();
            $table->integer('login_count')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->timestamp('registered_at')->nullable();
            $table->boolean('virtual')->default(false);

            $table->json('meta')->nullable();

            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();

            $table->fullText(['first_name', 'last_name', 'middle_name', 'email', 'phone']);
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
};
