<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Insertar clientes
        DB::table('clients')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john@gmail.com',
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@gmail.com',
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Carlos Montero',
                'email' => 'carlos@gmail.com',
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Federico Sanchez',
                'email' => 'federico@gmail.com',
                'created_at' => now(),
                'updated_at' => null,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('clients')->truncate();
    }
};
