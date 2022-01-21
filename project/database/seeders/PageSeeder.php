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
                'parent_id' => 0,
                'slug' => 'about',
                'title' => 'About',
                'title_menu' => 'About',
                'short_text' => 'About us description',
                'full_text' => 'About us text',
                'enabled' => 1,
                'created_at' => Carbon::yesterday(),
                'updated_at' => Carbon::today(),
            ],
        ]);

        Page::factory(4)->create();
    }
}
