<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('school');
            $table->string('class');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'name' => 'admin',
                'middlename' => 'admin',
                'lastname' => 'admin',
                'school' => 'administrator',
                'class' => 'administrator',
                'email' => 'admin@admin.com',
                'password' => '$2y$12$.ugj/8zL3FQ.RdLzPZB7j.RGXijGDm.rk.fue7XL3/HmEug.sZP8q',
                'role' => 'admin'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
