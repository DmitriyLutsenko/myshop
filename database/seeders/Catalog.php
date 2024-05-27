<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Catalog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testData = [
            [
                'id' => 1,
                'title' => "Компьютеры",
                'code' => 'komputeri',
                'status' => 1,
                'h1' => 'Каталог компьютеров',
                'description' => 'Добро пожаловать на сайт магазина компьютерной техники.',
                'seotitle' => 'Каталог компьютеров | Интернет-магазин компьютеров и ноутбуков',
                'seodescription' => 'Купить компьютер просто. Зайдите на наш сайт и закажите нужную модель',
                'category_id' => NULL
            ],
            [
                'id' => 2,
                'title' => "Ноутбуки",
                'code' => 'noutbuki',
                'status' => 1,
                'h1' => 'Каталог ноутбуков',
                'description' => 'Широкий ассортимент ноутбуков от ведущих производителей.',
                'seotitle' => 'Каталог ноутбуков | Интернет-магазин ноутбуков и ультрабуков',
                'seodescription' => 'Выберите ноутбук по вашим требованиям и заказывайте онлайн.',
                'category_id' => NULL
            ],
            [
                'id' => 3,
                'title' => "ПК комплектующие",
                'code' => 'pk_komplektuyushchie',
                'status' => 1,
                'h1' => 'Комплектующие для ПК',
                'description' => 'Широкий выбор комплектующих для сборки и апгрейда ПК.',
                'seotitle' => 'Комплектующие для ПК | Интернет-магазин комплектующих для ПК',
                'seodescription' => 'Подберите необходимые комплектующие и создайте свой идеальный компьютер.',
                'category_id' => 1,
            ],

            [
                'id' => 4,
                'title' => "Видеокарты",
                'code' => 'videokarti',
                'status' => 1,
                'h1' => 'Видеокарты',
                'description' => 'Широкий выбор видеокарт для сборки и апгрейда ПК.',
                'seotitle' => 'Видеокарты для ПК | Интернет-магазин комплектующих для ПК',
                'seodescription' => 'Подберите видеокарту для Вашей конфигурации и создайте свой идеальный компьютер.',
                'category_id' => NULL,
            ],
            [
                'id' => 5,
                'title' => "Принтеры",
                'code' => 'printeri',
                'status' => 1,
                'h1' => 'Принтеры',
                'description' => 'Широкий выбор принтеров.',
                'seotitle' => 'Принтеры | Интернет-магазин комплектующих для ПК',
                'seodescription' => 'Подберите принтер для офисной работы.',
                'category_id' => NULL,
            ],
        ];

        foreach ($testData as $item)
        {
            DB::table('categories')->insert(
                [
                    'id'             => $item['id'],
                    'title'          => $item['title'],
                    'code'           => $item['code'],
                    'status'         => $item['status'],
                    'h1'             => $item['h1'],
                    'description'    => $item['description'],
                    'seotitle'       => $item['seotitle'],
                    'seodescription' => $item['seodescription'],
                    'category_id'    => $item['category_id'],
                ]
            );
        }

    }
}
