<?php

use App\Models\Admin\FunctionEnroll;
use Illuminate\Database\Seeder;

class FunctionEnrolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FunctionEnroll::create([
            'name' => 'Aluno',
        ]);
        FunctionEnroll::create([
            'name' => 'Professor',
        ]);
        FunctionEnroll::create([
            'name' => 'Corrdenador',
        ]);
        FunctionEnroll::create([
            'name' => 'Xerife',
        ]);
    }
}
