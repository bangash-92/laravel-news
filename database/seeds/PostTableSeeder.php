
<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{

    public function run()
    {
        $first_post = new Post();
        $first_post->user_id = 2;
        $first_post->category_id = 2;
        $first_post->website_id = 2;
        $first_post->title = "Using Laravel Seeders";
        $first_post->body = "Laravel includes a simple method of seeding your database with test data using seed classes. All seed classes are stored in the database/seeds directory. Seed classes may have any name you wish, but probably should follow some sensible convention, such as UsersTableSeeder, etc. By default, a DatabaseSeeder class is defined for you. From this class, you may use the  call method to run other seed classes, allowing you to control the seeding order.";
        $first_post->save();

        $second_post = new Post();
        $second_post->user_id = 2;
        $second_post->category_id = 1;
        $second_post->website_id = 1;        
        $second_post->title = "Database: Migrations";
        $second_post->body = "Migrations are like version control for your database";
        $second_post->save();
    }
}