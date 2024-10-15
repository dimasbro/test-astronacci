<?php
// namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;

class ArticleSeeder extends Seeder
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
    		Article::create([
    			'article_name' => $faker->name,
                'article_description' => $faker->text,
    		]);
    	}

    }
}
