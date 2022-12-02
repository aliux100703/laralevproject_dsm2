<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Detalles;
use App\Models\Productos;
use App\Models\TipoEmpleados;
use App\Models\TipoProductos;
use App\Models\Turnos;
use App\Models\Usuarios;
use App\Models\Ventas;
use Database\Factories\tipoempleadosFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Productos::factory(40)->create();
        Ventas::factory(40)->create();
        Detalles::factory(40)->create();
        Productos::factory(40)->create();
       //TipoEmpleados::factory(40)->create();
        //TipoProductos::factory(40)->create();
        Turnos::factory(40)->create();
        Usuarios::factory(40)->create();
    }
}
