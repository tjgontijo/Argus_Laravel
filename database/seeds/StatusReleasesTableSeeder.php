<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\StatusRelease;

class StatusReleasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusRelease::create([
            'name' => 'Publicado no PAE'
        ]);
        StatusRelease::create([
            'name' => 'Inscrições Abertas'
        ]);
        StatusRelease::create([
            'name' => 'Inscrições Encerradas'
        ]);
        StatusRelease::create([
            'name' => 'Em andamento'
        ]);
        StatusRelease::create([
            'name' => 'Concluido'
        ]);
        StatusRelease::create([
            'name' => 'Não realizado'
        ]);
    }
}
