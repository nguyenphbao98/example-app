<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
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

        \Illuminate\Support\Facades\DB::table('companies')->truncate();
        Company::factory()->count(5)->create();

        $this->enableForeignKeys();
    }
}
