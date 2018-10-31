<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\CourseType;

class CourseTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseType::create([            
            'name' => 'Curso de Formação',
            'description' => 'Curso ofertado pela PMDF',
            'type' => 'PMDF',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        CourseType::create([            
            'name' => 'Curso de Aperfeiçoamento',
            'description' => 'Curso ofertado pela PMDF',
            'type' => 'PMDF',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        CourseType::create([            
            'name' => 'Curso de Especialização',
            'description' => 'Curso ofertado pela PMDF',
            'type' => 'PMDF',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        CourseType::create([            
            'name' => 'Curso de Extensão',
            'description' => 'Curso ofertado pela PMDF',
            'type' => 'PMDF',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        CourseType::create([            
            'name' => 'Curso de Pós Graduação',
            'description' => 'Curso ofertado pela PMDF',
            'type' => 'PMDF',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        CourseType::create([            
            'name' => 'Curso de Formação',
            'description' => 'Curso ofertado pela PMSP',
            'type' => 'Outros Órgãos',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        CourseType::create([            
            'name' => 'Curso de Especialização',
            'description' => 'Curso ofertado pelo CMBDF',
            'type' => 'Outros Órgãos',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
