<?php

use App\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       User::create([

            'id' =>  '1',
            'unit_id' => '73',          
            'username' => 'unis.thiago',
          
        ]);
    //    User::create([

    //         'id' =>  '2',
    //         'unit_id' => '73',          
    //         'username' => 'marcio.mattos',
          
    //     ]);
    //    User::create([

    //         'id' =>  '3',
    //         'unit_id' => '73',          
    //         'username' => 'arilson.souza',
          
    //     ]);
    //    User::create([

    //         'id' =>  '4',
    //         'unit_id' => '73',          
    //         'username' => 'alexandre.ferro',
          
    //     ]);
    //    User::create([

    //         'id' =>  '5',
    //         'unit_id' => '73',          
    //         'username' => 'welington.santos',
          
    //     ]);
    //    User::create([

    //         'id' =>  '6',
    //         'unit_id' => '73',          
    //         'username' => 'joao.felix',
          
    //     ]);
    //    User::create([

    //         'id' =>  '7',
    //         'unit_id' => '73',          
    //         'username' => 'clawdemy.silva',
          
    //     ]);
    }
}
