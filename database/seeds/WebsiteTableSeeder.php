
<?php
use App\NewsWebsite;
use Illuminate\Database\Seeder;

class NewsWebsiteTableSeeder extends Seeder
{
    public function run()
    {
        $news_website = new NewsWebsite();
        $news_website->website = 'BBC';
        $news_website->save();

        $news_website2 = new NewsWebsite();
        $news_website2->website = 'CNN';
        $news_website2->save();
    }
}