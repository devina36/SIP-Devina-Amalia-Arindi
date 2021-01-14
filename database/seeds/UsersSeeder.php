<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           [ 
            'role_id' => '1',
            'name' => 'Ade Kusuma',
            'username' => '@ade123',
            'email' => 'ade123@gmail.com',
            'password' => 'ade123',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [ 
            'role_id' => '2',
            'name' => 'Barats',
            'username' => '@barats',
            'email' => 'barats22@gmail.com',
            'password' => 'barats22',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [ 
            'role_id' => '2',
            'name' => 'Camelia Art',
            'username' => '@camelia',
            'email' => 'camelia@gmail.com',
            'password' => 'camelia',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [ 
            'role_id' => '1',
            'name' => 'Devina Amalia',
            'username' => '@devina36',
            'email' => 'devina302@gmail.com',
            'password' => 'devina302',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [ 
            'role_id' => '2',
            'name' => 'Erick Nam',
            'username' => '@erick',
            'email' => 'ericknam@gmail.com',
            'password' => 'erick12',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [ 
            'role_id' => '2',
            'name' => 'Fabiola',
            'username' => '@fabiola',
            'email' => 'fabiola1@gmail.com',
            'password' => 'fabiola',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [ 
            'role_id' => '2',
            'name' => 'Gaga Rio',
            'username' => '@gagario',
            'email' => 'gaga23@gmail.com',
            'password' => 'gaga23',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [ 
            'role_id' => '2',
            'name' => 'Harits Ar',
            'username' => '@harits',
            'email' => 'harits@gmail.com',
            'password' => 'harits12',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [ 
            'role_id' => '2',
            'name' => 'Intan Camela',
            'username' => '@intancam',
            'email' => 'intan234@gmail.com',
            'password' => 'intan123',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ],
           [ 
            'role_id' => '2',
            'name' => 'Jojo Rabbits',
            'username' => '@jojora',
            'email' => 'jojora@gmail.com',
            'password' => 'jojora',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
           ]
        ]);
    }
}
