<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insertOrIgnore([
            ['category' => 'Server'],
            ['category' => 'Front End'],
            ['category' => 'Backend'],
            ['category' => 'IT'],
            ['category' => 'HR'],
            ['category' => 'Database'],
            ['category' => 'Design'],
            ['category' => 'IOS'],
            ['category' => 'Android'],
            ['category' => 'Data Science']
        ]);
    }
}
