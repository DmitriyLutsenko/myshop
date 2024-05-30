<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductParameterSeeder extends Seeder
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
                'name'   => 'Бренд',
                'code'   => 'brand',
                'values' => '[
                    {"title":"ASUS"},
                    {"title":"Lenovo"},
                    {"title":"MSI"},
                    {"title":"APPLE"},
                    {"title":"Honor"},
                    {"title":"HP"}]',
            ],
            [
                'name' => 'Процессор',
                'code' => 'cpu',
                'values' => '[
                    {"title":"Intel Celeron"},
                    {"title":"Intel Pentium"},
                    {"title":"Intel Core i3"},
                    {"title":"Intel Core i5"},
                    {"title":"Intel Core i7"},
                    {"title":"Intel Xeon E3"}
                  ]', 
            ],
            [
                'name' => 'Частота процессора',
                'code' => 'cpu-freq',
                'values' => '[
                    {"title":"1.0GHz"},
                    {"title":"1.5GHz"},
                    {"title":"2.0GHz"},
                    {"title":"2.5GHz"},
                    {"title":"3.0GHz"},
                    {"title":"3.5GHz"},
                    {"title":"4.0GHz"}
                  ]', 
            ],
            [
                'name' => 'Операционная система',
                'code' => 'os',
                'values' => '[
                    {"title":"Не установлено"},
                    {"title":"Linux Ubuntu"},
                    {"title":"Linux Debian"},
                    {"title":"Windows 7"},
                    {"title":"Windows 8"},
                    {"title":"Windows 8.1"},
                    {"title":"Windows 10"},
                    {"title":"Windows 11"}
                  ]', 
            ],
            [
                'name' => 'Оперативная память, ГБ',
                'code' => 'ram',
                'values' => '[
                    {"title":"2"},
                    {"title":"4"},
                    {"title":"8"},
                    {"title":"16"},
                    {"title":"32"},
                    {"title":"64"}
                  ]', 
            ],
        ];

        foreach ($testData as $item)
        {
            DB::table('product_parameters')->insert(
                [
                    'name'  => $item['name'],
                    'code'  => $item['code'],
                    'values' => $item['values']
                ]
            );
        }
    }
}
