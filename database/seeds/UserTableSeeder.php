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
            ['id' => 1, 'name' => 'adianto putra warto', 'class' => '10 RPL 1', 'level' => '1', 'phone' => '087759716911', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => 'milan kharel', 'class' => '10 RPL 2', 'level' => '1', 'phone' => '087759716912', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'name' => 'adzanul ikhbal syaifulloh', 'class' => '10 RPL 3', 'level' => '1', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'name' => 'helmi yahya', 'class' => '11', 'level' => '1', 'phone' => '1313', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'name' => 'milu', 'class' => '12', 'level' => '1', 'phone' => '1414', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'name' => 'malu', 'class' => '12', 'level' => '1', 'phone' => '1515', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 7, 'name' => 'mita', 'class' => '11', 'level' => '1', 'phone' => '1212', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 8, 'name' => 'mila', 'class' => '11', 'level' => '1', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 9, 'name' => 'mata', 'class' => '11', 'level' => '1', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 11, 'name' => 'mali', 'class' => '11', 'level' => '1', 'phone' => '1313', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 11, 'name' => 'milu', 'class' => '12', 'level' => '1', 'phone' => '1414', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 12, 'name' => 'malu', 'class' => '12', 'level' => '1', 'phone' => '1515', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 13, 'name' => 'mita', 'class' => '11', 'level' => '1', 'phone' => '1212', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 14, 'name' => 'mila', 'class' => '11', 'level' => '1', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 15, 'name' => 'mata', 'class' => '11', 'level' => '1', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 16, 'name' => 'mali', 'class' => '11', 'level' => '1', 'phone' => '1313', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 17, 'name' => 'milu', 'class' => '12', 'level' => '1', 'phone' => '1414', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 18, 'name' => 'malu', 'class' => '12', 'level' => '1', 'phone' => '1515', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 19, 'name' => 'mita', 'class' => '11', 'level' => '1', 'phone' => '1212', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 21, 'name' => 'mila', 'class' => '11', 'level' => '1', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 21, 'name' => 'mata', 'class' => '11', 'level' => '1', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 22, 'name' => 'mali', 'class' => '11', 'level' => '1', 'phone' => '1313', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 23, 'name' => 'milu', 'class' => '12', 'level' => '1', 'phone' => '1414', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 24, 'name' => 'malu', 'class' => '12', 'level' => '1', 'phone' => '1515', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 25, 'name' => 'mita', 'class' => '11', 'level' => '1', 'phone' => '1212', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 26, 'name' => 'mila', 'class' => '11', 'level' => '1', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 27, 'name' => 'mata', 'class' => '11', 'level' => '1', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 28, 'name' => 'mali', 'class' => '11', 'level' => '1', 'phone' => '1313', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 29, 'name' => 'milu', 'class' => '12', 'level' => '1', 'phone' => '1414', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 31, 'name' => 'malu', 'class' => '12', 'level' => '1', 'phone' => '1515', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 31, 'name' => 'mita', 'class' => '11', 'level' => '1', 'phone' => '1212', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 32, 'name' => 'mila', 'class' => '11', 'level' => '1', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 33, 'name' => 'mata', 'class' => '11', 'level' => '1', 'phone' => '1111', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 34, 'name' => 'mali', 'class' => '11', 'level' => '1', 'phone' => '1313', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 35, 'name' => 'milu', 'class' => '12', 'level' => '1', 'phone' => '1414', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 36, 'name' => 'malu', 'class' => '12', 'level' => '1', 'phone' => '1515', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 37, 'name' => 'malu', 'class' => '12', 'level' => '1', 'phone' => '1515', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
            ['id' => 7, 'name' => 'Engineering', 'class' => '11', 'level' => '3', 'phone' => '1516', 'password' => bcrypt('qwerty'),  'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('users')->insert($user);
    }
}
