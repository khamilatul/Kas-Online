<?php


use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
        // truncate record
        DB::table('users')->truncate();

        $user = [
            ['id' => 2, 'name' => 'mita', 'class' => '12', 'level' => '1', 'phone' => '1212', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 1, 'name' => 'mila', 'class' => '11', 'level' => '2', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'name' => 'mata', 'class' => '10', 'level' => '3', 'phone' => '1010', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'name' => 'mali', 'class' => '13', 'level' => '4', 'phone' => '1313', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'name' => 'milu', 'class' => '14', 'level' => '5', 'phone' => '1414', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'name' => 'malu', 'class' => '15', 'level' => '6', 'phone' => '1515', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('users')->insert($user);
    }
}
