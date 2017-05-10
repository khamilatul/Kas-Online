<?php


use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        // truncate record
        DB::table('transactions')->truncate();

        // $transaction = [
        //     ['id' => 1, 'description' => 'dobel 5 kali', 'amount' => '10000', 'month' => 'januari','users_id' => '1','created_at' => \Carbon\Carbon::now()],
        //     ['id' => 2, 'description' => 'dobel 1 kali', 'amount' => '2000' , 'month' => 'januari','users_id' => '2','created_at' => \Carbon\Carbon::now()],
        //     ['id' => 3, 'description' => 'dobel 3 kali', 'amount' => '6000' , 'month' => 'januari','users_id' => '3','created_at' => \Carbon\Carbon::now()],
        //     ['id' => 4, 'description' => 'dobel 2 kali', 'amount' => '4000' , 'month' => 'januari','users_id' => '4','created_at' => \Carbon\Carbon::now()],
        //     ['id' => 5, 'description' => 'lunas', 'amount' => '0', 'month' => 'januari','users_id' => '5','created_at' => \Carbon\Carbon::now()],
        //     ['id' => 6, 'description' => 'dobel 4 kali', 'amount' => '8000', 'month' => 'januari','users_id' => '6','created_at' => \Carbon\Carbon::now()],
        //     ];
        //           // insert batch
        // DB::table('transactions')->insert($transaction);
    }
}
