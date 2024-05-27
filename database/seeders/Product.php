<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Product extends Seeder
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
                'title' => 'Ноутбук ASUS X515EA-BQ4265',
                'code'  => 'noutbuk-asus-x51ea-bq4265',
                'status'=> 1,
                'h1'=> 'Ноутбук ASUS X515EA-BQ4265',
                'description' => 
                '<p>Универсальный ноутбук Asus X515EA-BQ4265 демонстрирует высокую производительность при решении базовых задач, работе с офисными программами.</p>',
                'seotitle' => 'Ноутбук ASUS X515EA-BQ4265 | Купить в нашем интернет магазине',
                'seodescription' => 'Универсальный ноутбук Asus X515EA-BQ4265 для офисной работы.',
                'articule' => 'product-000000001',
                'price' => 40000.00,
                'images' => '{"image-0": {"src":"","alt":""}, "image-1": {"src":"","alt":""}}',
                'attributes' => '{"RAM":{"title":"Оперативная память","value":"8"},"CPU":{"title":"Процессор","value":"Intel Pentium"}}',
            ],
            [
                'title' => 'Компьютер HP Pavilion',
                'code'  => 'kompyuter-hp-pavilion',
                'status' => 1,
                'h1' => 'Компьютер HP Pavilion',
                'description' => '<p>Мощный компьютер HP Pavilion - отличное решение для игр и тяжелых вычислений.</p>',
                'seotitle' => 'Компьютер HP Pavilion | Купить в нашем интернет магазине',
                'seodescription' => 'Мощный компьютер HP Pavilion для игр и работы.',
                'articule' => 'product-000000002',
                'price' => 60000.00,
                'images' => '{"image-0": {"src":"","alt":""}, "image-1": {"src":"","alt":""}}',
                'attributes' => '{"RAM":{"title":"Оперативная память","value":"16"},"CPU":{"title":"Процессор","value":"AMD Ryzen"}}',
            ],
            [
                'title' => 'Монитор Samsung Curved',
                'code'  => 'monitor-samsung-curved',
                'status' => 1,
                'h1' => 'Монитор Samsung Curved',
                'description' => '<p>Иммерсивный монитор Samsung Curved обеспечивает широкий угол обзора и высокое качество изображения.</p>',
                'seotitle' => 'Монитор Samsung Curved | Купить в нашем интернет магазине',
                'seodescription' => 'Иммерсивный монитор Samsung Curved с широким углом обзора.',
                'articule' => 'product-000000003',
                'price' => 25000.00,
                'images' => '{"image-0": {"src":"","alt":""}, "image-1": {"src":"","alt":""}}',
                'attributes' => '{"Resolution":{"title":"Разрешение","value":"1920x1080"},"Size":{"title":"Размер","value":"27 дюймов"}}',
            ],
            [
                'title' => 'Принтер Canon Pixma',
                'code'  => 'printer-canon-pixma',
                'status' => 1,
                'h1' => 'Принтер Canon Pixma',
                'description' => '<p>Компактный и надежный принтер Canon Pixma обеспечивает качественную печать документов и фотографий.</p>',
                'seotitle' => 'Принтер Canon Pixma | Купить в нашем интернет магазине',
                'seodescription' => 'Компактный принтер Canon Pixma для качественной печати.',
                'articule' => 'product-000000004',
                'price' => 5000.00,
                'images' => '{"image-0": {"src":"","alt":""}, "image-1": {"src":"","alt":""}}',
                'attributes' => '{"Type":{"title":"Тип","value":"Струйный"},"Print speed":{"title":"Скорость печати","value":"10 стр/мин"}}',
            ],
        ];

        foreach ($testData as $item)
        {
            DB::table('products')->insert(
                [
                    'title'             => $item['title'],
                    'code'              => $item['code'],
                    'status'            => $item['status'],
                    'h1'                => $item['h1'],
                    'description'       => $item['description'],
                    'seotitle'          => $item['seotitle'],
                    'seodescription'    => $item['seodescription'],
                    'articule'          => $item['articule'],
                    'price'             => $item['price'],
                    'images'            => $item['images'],
                    'attributes'        => $item['attributes'],
                ]
            );
        }
    }
}
