<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MasheyaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('masheyas')->insert([
            [
                'name' => 'مخلوط سوبر سيلاج ذرة',
                'image' => 'Super Corn.png',
                'description' => '',
            ],
            [
                'name' => 'خلطة أعلاف أغنام متكاملة',
                'image' => 'TMR Sheep.png',
                'description' => 'هتبني جهاز هضمي يقدر يمتص العناصر الغذائية بكفاءة عالية وتحمي القطيع من الأمراض المعوية وتبقى مستعد للمرحلة الأصعب في الدورة ',
            ],
            [
                'name' => 'خلطة تسمين ماشية متكاملة',
                'image' => 'TMR Fattening.png',
                'description' => 'مرحلة مهمة جدا وفيها تحديات مرضية كتير، وعلف الوادي الناهي 19% الوحيد اللي بيضمنلك أعلى مقاومة للأمراض والإجهاد الحراري في المرحلة دي وبوصل القطيع بتاعك لأعلى وزن عند أقل عمر',
            ],
            [
                'name' => 'خلطة حلاب ماشية عالي الادرار',
                'image' => 'TMR Milking.png',
                'description' => 'و اللي بيتكون من العناصر الأعلى هضمية , لبداية مثالية , ومكاسب خيالية',
            ]
            ]);
        }
        
}



