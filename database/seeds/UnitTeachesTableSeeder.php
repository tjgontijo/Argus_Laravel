<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\UnitTeach;

class UnitTeachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnitTeach::create([
            'id' => '1',
            'short_name' => 'APMB',
            'name' => 'Academia de Polícia Militar de Brasília',   
        ]);
        UnitTeach::create([
            'id' => '2',
            'short_name' => 'CAEAp',
            'name' => 'Centro de Altos Estudos e Aperfeiçoamento',        
        ]);
        UnitTeach::create([
            'id' => '3',
            'short_name' => 'DEEC',
            'name' => 'Diretoria de Especialização e Educação Continuada',    
        ]);
    }
}
