<?php

 namespace Database\Seeders;

 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'NIYONKURU JOY',
            'username' => 'niyonkurujoy',
            'email' =>'niyojoy@gmail.com',
            'username' => 'niyonkurujoy',

            'roles_id' => 1,
            'password' => Hash::make('joy@'),
            ]);


            DB::table('users')->insert([
                'name' => 'AMOUR CHRIST',
                'username' => 'amourchrist',
                'email' =>'amour2023@gmail.com',
                'username' => 'amourchrist',

                'roles_id' => 2,
                'password' => Hash::make('christ05@'),
                ]);

                DB::table('users')->insert([
                    'name' => 'RUKUNDO M. BELYSE',
                    'username' => 'rukudomariebelyse',
                    'email' =>'belyserukundo@gmail.com',
                    'username' => 'belyse',

                    'roles_id' => 3,
                    'password' => Hash::make('belyse03@'),
                    ]);
    }
}