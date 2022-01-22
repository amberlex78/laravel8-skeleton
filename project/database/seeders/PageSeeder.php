<?php

namespace Database\Seeders;

use App\Models\Page;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'id' => 1,
                'slug' => 'about',
                'title' => 'About',
                'content' => 'About us text',
                'is_active' => 1,
                'created_at' => Carbon::yesterday(),
                'updated_at' => Carbon::today(),
            ],
        ]);

        Page::factory(4)->create();
    }
}
