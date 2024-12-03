<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agencias')->insert([
            [
                'name' => 'Agencia 1 SAS',
                'nit' => 321654987,
                'type' => 'Principal',
            ],
            [
                'name' => 'Agencia 2 CI',
                'nit' => 98983336,
                'type' => 'Principal',
            ],
            [
                'name' => 'Agencia 3 Ltda',
                'nit' => 123456789,
                'type' => 'Sucursal',
            ],
            [
                'name' => 'Agencia 4 SAS',
                'nit' => 987654321,
                'type' => 'Principal',
            ],
            [
                'name' => 'Agencia 5 CIA',
                'nit' => 456789123,
                'type' => 'Sucursal',
            ],
            [
                'name' => 'Agencia 6 Internacional',
                'nit' => 567890123,
                'type' => 'Principal',
            ],
            [
                'name' => 'Agencia 7 Express',
                'nit' => 908172635,
                'type' => 'Sucursal',
            ],
            [
                'name' => 'Agencia 8 Travel',
                'nit' => 112233445,
                'type' => 'Sucursal',
            ],
            [
                'name' => 'Agencia 9 VIP',
                'nit' => 998877665,
                'type' => 'Principal',
            ],
            [
                'name' => 'Agencia 10 Tour',
                'nit' => 223344556,
                'type' => 'Sucursal',
            ],
        ]);
    }
}
