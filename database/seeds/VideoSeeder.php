<?php
// namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for ($i = 0; $i < 15; $i++) {
    		Video::create([
    			'video_name' => $faker->name,
                'video_description' => $faker->text,
                'video_url' => $faker->url,
    		]);
    	}

    }
}
