<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DawagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dawagens')->insert([
            [
                'name' => '%نامي 21 ',
                'name2' => '(من عمر 11 يوم - 21 يوم)',
                'image' => '2- Namy (7.350 L.E)Per Ton.png',
                'description' => 'هتبني جهاز هضمي يقدر يمتص العناصر الغذائية بكفاءة عالية وتحمي القطيع من الأمراض المعوية وتبقى مستعد للمرحلة الأصعب في الدورة',
            ],[
                'name' => '%ناهي 19',
                'name2' => '(عمر 25 يوم - حتى يوم البيع)',
                'image' => '3- Nahy (7.300 L.E)Per Ton.png',
                'description' => ' مرحلة مهمة جدا وفيها تحديات مرضية كتير، وعلف الوادي الناهي 19% الوحيد اللي بيضمنلك أعلى مقاومة للأمراض والإجهاد الحراري في المرحلة دي وبوصل القطيع بتاعك لأعلى وزن عند أقل عمر',
            ],[
                'name' => '%بادي 23 ',
                'name2' => ' (من عمر 1 يوم - 10 يوم) ',
                'image' => '1- Bady (7.450 L.E) Per Ton.png',
                'description' => 'و اللي بيتكون من العناصر الأعلى هضمية , لبداية مثالية , ومكاسب خيالية',
            ],[
                'name' => '%نامي 21 ',
                'name2' => '(من عمر 11 يوم - 21 يوم) ',
                'image' => '2- Namy (7.350 L.E)Per Ton.png',
                'description' => '',
            ],[
                'name' => '% بادي نامي 21 ',
                'name2' => '',
                'image' => '5- Bady Nami (6.950 L.E)Per Ton.png',
                'description' => '',
            ],[
                'name' => ' % بادي 20 ',
                'name2' => '',
                'image' => '10- Zahbeya(Badi1) (6.550 L.E) Per Ton.png',
                'description' => '',
            ],[
                'name' => ' %نامي 15',
                'name2' => '',
                'image' => '12- Zahbeya(Nami1) (5.950 L.E) Per Ton.png',
                'description' => '',
            ],[
                'name' => '% إنتاجي 19',
                'name2' => '',
                'image' => '14- Zahbeya2(Bayad1) (6.200 L.E) Per Ton.png',
                'description' => '',
            ],
        ]);
        }
}

