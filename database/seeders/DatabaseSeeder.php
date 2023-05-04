<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\Account;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $account = [
            [
                'name'  => 'Mark',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s')
            ],
            [
                'name'  => 'Bil Gates',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s')
            ],

        ];
        \App\Models\Account::insert($account);

        $startDate = Carbon::parse('2023-01-01');
        $endDate = Carbon::parse('2023-01-7');

        $transactions = [
            ['account_id' => 1,        'transaction_date' => Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp)), 'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),        'description' => 'Setor Tunai',        'debit_credit' => 'C',        'ammount' => 200000],
            ['account_id' => 1,        'transaction_date' => Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp)), 'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),        'description' => 'Beli Pulsa',        'debit_credit' => 'D',        'ammount' => 10000],
            ['account_id' => 1,        'transaction_date' => Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp)), 'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),        'description' => 'Bayar Listrik',        'debit_credit' => 'D',        'ammount' => 70000],
            ['account_id' => 1,        'transaction_date' => Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp)), 'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),        'description' => 'Tarik Tunai',        'debit_credit' => 'D',        'ammount' => 100000],
            ['account_id' => 1,        'transaction_date' => Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp)), 'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),        'description' => 'Setor Tunai',        'debit_credit' => 'C',        'ammount' => 300000],
            ['account_id' => 1,        'transaction_date' => Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp)), 'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),        'description' => 'Bayar Listrik',        'debit_credit' => 'D',        'ammount' => 50000]
        ];

        \App\Models\Transction::insert($transactions);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
