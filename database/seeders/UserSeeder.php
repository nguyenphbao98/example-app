<?php

namespace Database\Seeders;

use App\Models\User;
use App\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        User::factory()->count(105)->create();;

        $this->enableForeignKeys();
    }
}
