<?php

namespace App\Console\Commands;

use App\Models\Empresa;
use App\Models\Posicion;
use App\Models\Producto;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CrearPosicion extends Command
{
    protected $signature = 'crear:posicion
                            {idEmpresa : ID de la empresa}
                            {idProducto : ID del producto}
                            {fechaEntrega : Fecha de entrega (Y-m-d)}
                            {moneda : Moneda (ej: USD)}
                            {precio : Precio de la posición}';

    protected $description = 'Crear una posicion por consola';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $idEmpresa = $this->argument('idEmpresa');
        $idProducto = $this->argument('idProducto');
        $fechaEntrega = $this->argument('fechaEntrega');
        $moneda = $this->argument('moneda');
        $precio = $this->argument('precio');

        // Validaciones básicas
        if (!Empresa::find($idEmpresa)) {
            $this->error('Empresa no encontrada.');
            return 1;
        }

        if (!Producto::find($idProducto)) {
            $this->error('Producto no encontrado.');
            return 1;
        }

        if (!is_numeric($precio) || $precio <= 0) {
            $this->error('El precio debe ser un número mayor a 0.');
            return 1;
        }

        if (!Carbon::hasFormat($fechaEntrega, 'Y-m-d') || Carbon::parse($fechaEntrega)->lt(now()->startOfDay())) {
            $this->error('La fecha de entrega debe ser hoy o una fecha futura en formato YYYY-MM-DD.');
            return 1;
        }

        $posicion = Posicion::create([
            'idEmpresa' => $idEmpresa,
            'idProducto' => $idProducto,
            'fechaEntregaInicio' => $fechaEntrega,
            'moneda' => $moneda,
            'precio' => $precio,
        ]);

        $this->info("Posición creada con ID: {$posicion->id}");
        return 0;
    }
}
