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
        DB::table('products')->insert([
            [
                'name' => 'Laptop',
                'description' => 'Laptop de alta gama',
                'price' => 1200,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Laptop Dell',
                'description' => 'Laptop dell con super procesador, y excelente memoria',
                'price' => 1700,
                'stock' => 12,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Laptop Azus',
                'description' => 'Laptop Azus eficiente en trabajos pesados y juegos',
                'price' => 1900,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Smartphone Lg',
                'description' => 'Smartphone con cámara de 108MP',
                'price' => 800,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Smartphone Samsung',
                'description' => 'Smartphone con cámara de 58MP y 8GB de RAM',
                'price' => 600,
                'stock' => 20,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Escritorio madera',
                'description' => 'Madera exportada de la mejor calidad diseñada para tu comodidad',
                'price' => 2900,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Escritorio metal',
                'description' => 'Metal resistente y duradero, diseñado para tu comodidad',
                'price' => 1800,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Silla gamer',
                'description' => 'Con esta silla gamer podrás jugar por horas sin sentir cansancio',
                'price' => 2000,
                'stock' => 6,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Silla oficina',
                'description' => 'Trabaja como y fresco con nuestre silla de oficina en malla',
                'price' => 800,
                'stock' => 17,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Silla ejecutiva',
                'description' => 'La elegancia y el confort se unen en esta silla ejecutiva',
                'price' => 1000,
                'stock' => 2,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Televisor 32 pulgadas',
                'description' => 'Cuenta con una resolución de 4K y 60Hz',
                'price' => 400,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Televisor 42 pulgadas',
                'description' => 'Cuenta con una resolución de 5K y 60Hz',
                'price' => 600,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Televisor 50 pulgadas',
                'description' => 'Cuenta con una resolución de 4K y 120Hz y asistente de voz',
                'price' => 800,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Televisor 60 pulgadas',
                'description' => 'Cuenta con una resolución de 8K y 120Hz y asistente de voz',
                'price' => 2200,
                'stock' => 8,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'camisa ejecutiva',
                'description' => 'Elegancia y comodidad en una sola prenda',
                'price' => 100,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Camiseta Deportiva',
                'description' => 'Tela respirable y cómoda para tus entrenamientos',
                'price' => 120,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Zapatos Deportivos',
                'description' => 'Corre sin problema con estos zapatos deportivos',
                'price' => 500,
                'stock' => 3,
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'name' => 'Zapatos Elegantes',
                'description' => 'Destaca entre los demas con estos zapatos elegantes',
                'price' => 340,
                'stock' => 4,
                'created_at' => now(),
                'updated_at' => null,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('products')->truncate();
    }
};
