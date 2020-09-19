<?php

use Illuminate\Database\Seeder;

class ActressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actress')->insertOrIgnore([
            'film_id' => 1,
            'name' => "Salman Khan",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('actress')->insertOrIgnore([
            'film_id' => 1,
            'name' => "Robert downey JR",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('actress')->insertOrIgnore([
            'film_id' => 2,
            'name' => "Sharukan",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('actress')->insertOrIgnore([
            'film_id' => 2,
            'name' => "Jet Li",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('actress')->insertOrIgnore([
            'film_id' => 4,
            'name' => "Herjunot ali",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
