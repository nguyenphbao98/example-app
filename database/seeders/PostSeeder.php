<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
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

        \Illuminate\Support\Facades\DB::table('posts')->truncate();
        Post::factory()->count(100)->create();;

        $this->enableForeignKeys();
    }
}
