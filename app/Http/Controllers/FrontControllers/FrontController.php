<?php

namespace App\Http\Controllers\FrontControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\News;
use Session;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::where('category_id', null)->get();
        $parentCategories = Category::where('category_id', null)->inRandomOrder()->take(3)->get();
        $itemHeaders = News::inRandomOrder()->take(4)->get();
        $contents = News::inRandomOrder()->take(12)->get();
        $news = News::inRandomOrder()->take(12)->get();
        $now = Carbon::now();

        return view('front-end.main', compact('categories', 'parentCategories', 'now', 'itemHeaders', 'contents', 'news'));
    }

    public function contactUs()
    {
        return view('front-end.contact-us');
    }

    public function singlePage(News $news)
    {
        $news->view++;
        $news->update();

        $prevNews = $nextNews = null;

        if($news->id-1 > 0){
            $prevNews = News::findOrFail($news->id-1);
        }

        if($news->id+1 <= News::latest('id')->first()->id){
            $nextNews = News::findOrFail($news->id+1);
        }

        $categories = Category::where('category_id', null)->get();
        $parentCategories = Category::where('category_id', null)->inRandomOrder()->take(3)->get();
        $itemHeaders = News::orderBy('id','desc')->take(4)->get();
        $contents = News::inRandomOrder()->take(12)->get();
        $now = Carbon::now();

        return view('front-end.single-page', compact('categories', 'parentCategories', 'now', 'itemHeaders', 'contents', 'news', 'prevNews', 'nextNews'));
    }

    public function categoryPage($category_id, $category_name)
    {
        $categories = Category::where('category_id', null)->get();
        $parentCategories = Category::where('category_id', null)->inRandomOrder()->take(4)->get();
        $itemHeaders = News::inRandomOrder()->take(4)->get();
        $contents = News::inRandomOrder()->take(12)->get();
        $news = News::where('category_id', $category_id)->get();
        $now = Carbon::now();

        return view('front-end.category-page', compact('categories', 'parentCategories', 'now', 'itemHeaders', 'contents', 'news', 'category_name'));
    }


    public function favoritePage()
    {
        $categories = Category::where('category_id', null)->get();
        $parentCategories = Category::where('category_id', null)->inRandomOrder()->take(3)->get();
        $itemHeaders = News::inRandomOrder()->take(4)->get();
        $contents = News::inRandomOrder()->take(12)->get();
        $news = News::findMany(Session::get('favorite'));;
        $now = Carbon::now();

        return view('front-end.category-page', compact('categories', 'parentCategories', 'now', 'itemHeaders', 'contents', 'news'));
    }

    public function addToFavorite($id)
    {
        if(Session::get('favorite')){
            if(in_array($id, Session::get('favorite'))){
                Session::forget("favorite.$id");
                Session::save();

                return "удален в список избранных";
            } else {
                Session::put("favorite.$id",$id);

                return "добавлен в список избранных";
            }
        } else {
            Session::put("favorite.$id",$id);

            return "добавлен в список избранных";
        }
    }
}
