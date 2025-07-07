<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederProducto extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            ['nombre' => 'TRIGO', 'usoFrecuente' => 1],
            ['nombre' => 'MAIZ', 'usoFrecuente' => 1],
            ['nombre' => 'LINO', 'usoFrecuente' => 0],
            ['nombre' => 'GIRASOL', 'usoFrecuente' => 1],
            ['nombre' => 'SORGO', 'usoFrecuente' => 1],
            ['nombre' => 'SOJA', 'usoFrecuente' => 1],
            ['nombre' => 'AVENA', 'usoFrecuente' => 0],
            ['nombre' => 'ALPISTE', 'usoFrecuente' => 0],
            ['nombre' => 'MIJO', 'usoFrecuente' => 0],
            ['nombre' => 'CENTENO', 'usoFrecuente' => 0],
            ['nombre' => 'CEBADA FORRAJERA', 'usoFrecuente' => 1],
            ['nombre' => 'TRIGO CANDEAL', 'usoFrecuente' => 0],
            ['nombre' => 'COLZA', 'usoFrecuente' => 0],
            ['nombre' => 'MANI', 'usoFrecuente' => 0],
            ['nombre' => 'ITA', 'usoFrecuente' => 0],
        ]);
    }
}
