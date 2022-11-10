<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //         PostTableSeeder::class,
        //     ]);
        $faker = Faker::create();
        foreach(range(20,1000) as $index)
        {
            DB::table('users')->insert([
                'user_name'=>$faker->name,
                'user_phone'=>$faker->phoneNumber,
                'user_email'=>$faker->email,
            ]);
        }
    }
}
