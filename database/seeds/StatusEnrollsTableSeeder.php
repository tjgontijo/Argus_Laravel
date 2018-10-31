<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\StatusEnroll;

class StatusEnrollsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusEnroll::create([
            'name' => 'Pendente'
        ]);

        StatusEnroll::create([
            'name' => 'Matriculado'
        ]);

        StatusEnroll::create([
            'name' => 'Não Autorizado'
        ]);
        StatusEnroll::create([
            'name' => 'Desistente'
        ]);
    }
}
