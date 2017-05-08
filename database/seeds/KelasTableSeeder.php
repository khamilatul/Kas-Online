<?php


use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
        // truncate record
        DB::table('kelas')->truncate();

         $kelas = [
            ['id' => 1, 'name' => '10 RPL 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => '10 RPL 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'name' => '10 RPL 3',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'name' => '10 TKJ 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'name' => '10 TKJ 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'name' => '10 TKR 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 7, 'name' => '10 TKR 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 8, 'name' => '10 TKR 3',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 9, 'name' => '10 TSM 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 10, 'name' =>'10 TSM 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 11, 'name' => '10 TEI 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 12, 'name' => '10 TEI 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 13, 'name' => '10 TEI 3',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 14, 'name' => '10 TEI 3',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 15, 'name' => '11 RPL 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 16, 'name' => '11 RPL 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 17, 'name' => '11 RPL 3',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 18, 'name' => '11 TKJ 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 19, 'name' => '11 TKJ 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 20, 'name' => '11 TKR 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 21, 'name' => '11 TKR 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 22, 'name' => '11 TKR 3',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 23, 'name' => '11 TSM 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 24, 'name' => '11 TEI 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 25, 'name' => '11 TEI 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 26, 'name' => '11 TEI 3',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 27, 'name' => '12 RPL 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 28, 'name' => '12 RPL 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 29, 'name' => '12 RPL 3',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 30, 'name' => '12 TKJ 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 31, 'name' => '12 TKR 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 32, 'name' => '12 TKR 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 33, 'name' => '12 TKR 3',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 34, 'name' => '12 TSM 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 35, 'name' => '12 TEI 1',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 36, 'name' => '12 TEI 2',  'created_at' => \Carbon\Carbon::now()],
            ['id' => 37, 'name' => '12 TEI 3',  'created_at' => \Carbon\Carbon::now()],
            
        ];

        // insert batch
        DB::table('kelas')->insert($kelas);
    }
}
