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

        $transaction = [
            ['id' => 1, 'description' => 'haloo', 'amount' => '120', 'members_id' => '121', 'month' => 'januari','users_id' => '1','created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'description' => 'haiii', 'amount' => '130', 'members_id' => '122', 'month' => 'februari','users_id' => '2','created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'description' => 'haluuuu', 'amount' => '140', 'members_id' => '123', 'month' => 'maret','users_id' => '3','created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'description' => 'hai', 'amount' => '150', 'members_id' => '124', 'month' => 'april','users_id' => '4','created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'description' => 'halo', 'amount' => '160', 'members_id' => '125', 'month' => 'mei','users_id' => '5','created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'description' => 'haii', 'amount' => '170', 'members_id' => '126', 'month' => 'juni','users_id' => '6','created_at' => \Carbon\Carbon::now()],
            ];
                  // insert batch
        DB::table('transactions')->insert($transaction);
    }
}
