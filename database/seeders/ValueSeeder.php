<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
           "attribute_id" => 1,
           "name" => [
               "en" => "Red",
               "uz" => "Qizil",
               "ru" => "Красный",
           ]
        ]);
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "en" => "Black",
                "uz" => "Qora",
                "ru" => "Черный",
            ]
        ]);
        Value::create([
            "attribute_id" => 1,
            "name" => [
                "en" => "Brown",
                "uz" => "Jigarrang",
                "ru" => "Коричневый",
            ]
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => [
                "en" => "MDF",
                "uz" => "MDF",
                "ru" => "МДФ",
            ]
        ]);
        Value::create([
            "attribute_id" => 2,
            "name" => [
                "en" => "LDSP",
                "uz" => "LDSP",
                "ru" => "ЛДСП",
            ]
        ]);
    }
}
