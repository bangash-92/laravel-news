
<?php
use App\NewsCategory;
use Illuminate\Database\Seeder;

class NewsCategoryTableSeeder extends Seeder
{
    public function run()
    {
        $news_category = new NewsCategory();
        $news_category->name = 'Sports';
        $news_category->save();

        $news_category2 = new NewsCategory();
        $news_category2->name = 'Current Affairs';
        $news_category2->save();
    }
}