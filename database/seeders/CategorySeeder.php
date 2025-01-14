<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
                'uz' => 'Stul',
                'ru' => 'Стул',
                'en' => 'Chair'
            ]
        ]);
        Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Стол',
                'en' => 'Table'
            ]
        ]);

        Category::create([
            'name' => [
                'uz' => 'Kreslo',
                'ru' => 'Кресло',
                'en' => 'Armchair'
            ]
        ]);
        Category::create([
            'name' => [
                'uz' => 'Divan',
                'ru' => 'Диван',
                'en' => 'Divan'
            ]
        ]);
        Category::create([
            'name' => [
                'uz' => 'Yotoq',
                'ru' => 'Кровать',
                'en' => 'Bed'
            ]
        ]);
    }
}
