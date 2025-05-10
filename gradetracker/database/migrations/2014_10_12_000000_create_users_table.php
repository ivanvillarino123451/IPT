<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use app\Models\Users;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained('roles')->OnDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('username')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

            $users[

                [
                    'name' => 'Admin',
                    'email' => 'Admin@gmail.com',
                    'username' => 'Admin',
                    'password' => hash::make('password'),
                ]
            ];

        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
