<?php


use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
        // truncate record
        DB::table('members')->truncate();

        $member = [
            ['id' => 1, 'name' => 'mila', 'class' => '11', 'email' => 'mila@gmail.com', 'phone' => '1111', 'users_id' => '1', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => 'mita', 'class' => '12', 'email' => 'mita@gmail.com', 'phone' => '1212', 'users_id' => '2', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'name' => 'mata', 'class' => '10', 'email' => 'mata@gmail.com', 'phone' => '1010', 'users_id' => '3', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'name' => 'mali', 'class' => '13', 'email' => 'mali@gmail.com', 'phone' => '1313', 'users_id' => '4', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'name' => 'milu', 'class' => '14', 'email' => 'milu@gmail.com', 'phone' => '1414', 'users_id' => '5', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'name' => 'malu', 'class' => '15', 'email' => 'malu@gmail.com', 'phone' => '1515', 'users_id' => '6', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('members')->insert($member);
    }
}
