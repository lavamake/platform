<?php

namespace Database\Seeders;

use App\Models\App;
use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;

class AppsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Generator::class);

        $users = User::where('subscribe_type_id', '>', 0)->pluck('id')->toArray();

        // 生成数据集合
        $apps = App::factory(30)
            ->make()->each(function ($app, $index)
            use ($faker, $users)
            {
                // 从头像数组中随机取出一个并赋值
                $app->user_id = $faker->randomElement($users);
            });

        $apps_array = $apps->toArray();

        App::insert($apps_array);

    }
}
