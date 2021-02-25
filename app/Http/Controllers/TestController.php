<?php

namespace App\Http\Controllers;
use Goutte;
use Illuminate\Http\Request;
use Spatie\ArrayToXml\ArrayToXml;
class TestController extends Controller

{
    public function index(){
        $url = 'https://ecode-learn.com/post/get-next-and-previous-post-link-in-post-page';
        $crawler = Goutte::request('GET', $url)
        //page title is in h1 tag
        //get title of the page
        echo $crawler->filter('h1')->first()->text();

        //get content of the page
        ech $crawler->filter('.single-page-content')->text();
    }
}