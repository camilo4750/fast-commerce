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
        DB::table('client_product')->insert([
            [
                'client_id' => 1, 
                'product_id' => 1, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 1, 
                'product_id' => 2, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 1, 
                'product_id' => 3, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 1, 
                'product_id' => 4, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 1, 
                'product_id' => 5, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 1, 
                'product_id' => 8, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 1, 
                'product_id' => 10, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 1, 
                'product_id' => 14, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 1, 
                'product_id' => 16, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 1, 
                'product_id' => 18, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 2, 
                'product_id' => 18, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 2, 
                'product_id' => 16, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 2, 
                'product_id' => 15, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 2, 
                'product_id' => 1, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 2, 
                'product_id' => 2, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 2, 
                'product_id' => 3, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 2, 
                'product_id' => 10, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 2, 
                'product_id' => 9, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 2, 
                'product_id' => 11, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 2, 
                'product_id' => 12, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 2, 
                'product_id' => 12, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 3, 
                'product_id' => 1, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 3, 
                'product_id' => 2, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 3, 
                'product_id' => 3, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 3, 
                'product_id' => 4, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 3, 
                'product_id' => 5, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 3, 
                'product_id' => 6, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 3, 
                'product_id' => 7, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 3, 
                'product_id' => 8, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 3, 
                'product_id' => 9, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 3, 
                'product_id' => 10, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 4, 
                'product_id' => 1, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 4, 
                'product_id' => 2, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 4, 
                'product_id' => 3, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 4, 
                'product_id' => 4, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 4, 
                'product_id' => 5, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 4, 
                'product_id' => 6, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 4, 
                'product_id' => 7, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 4, 
                'product_id' => 8, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 4, 
                'product_id' => 9, 
                'created_at' => now(), 
                'updated_at' => null
            ],
            [
                'client_id' => 4, 
                'product_id' => 10, 
                'created_at' => now(), 
                'updated_at' => null
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('client_product')->truncate();
    }
};
