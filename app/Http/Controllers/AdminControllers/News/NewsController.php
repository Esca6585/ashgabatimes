<?php

namespace App\Http\Controllers\AdminControllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\News;
use Str;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $pagination = 10)
    {
        if($request->pagination) {
            $pagination = (int)$request->pagination;
        }

        $news = News::orderByDesc('id')->paginate($pagination);

        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));

                $requestData = ['title', 'tag'];

                $news = News::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->paginate($pagination);
            }

            return view('admin-panel.news.news-table', compact('news', 'pagination'))->render();
        }

        return view('admin-panel.news.news', compact('news', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(News $news)
    {
        $parentCategories = Category::all();

        return view('admin-panel.news.news-form', compact('news', 'parentCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        if($request->file('image')){
            $image = $request->file('image');

            $date = date("d-m-Y H-i-s");

            $fileRandName = Str::random(10);
            $fileExt = $image->getClientOriginalExtension();

            $fileName = $fileRandName . '.' . $fileExt;

            $path = 'assets/news/' . Str::slug($request->name . '-' . $date ) . '/';

            $image->move($path, $fileName);

            $originalImage = $path . $fileName;
        }

        $news = new News;

        $news->title = $request->title;
        $news->body = $request->body;
        $news->tag = $request->tag;
        $news->image = $originalImage ?? null;
        $news->category_id = $request->category_id;

        $news->save();

        return redirect()->route('news.index')->with('success-create', 'The resource was created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin-panel.news.news-show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $parentCategories = Category::all();

        return view('admin-panel.news.news-form', compact('news', 'parentCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $news)
    {
        if($request->file('image')){

            $this->deleteFolder($news);

            $image = $request->file('image');

            $date = date("d-m-Y H-i-s");

            $fileRandName = Str::random(10);
            $fileExt = $image->getClientOriginalExtension();

            $fileName = $fileRandName . '.' . $fileExt;

            $path = 'assets/news/' . Str::slug($request->name_tm . '-' . $date . '-updated' ) . '/';

            $image->move($path, $fileName);

            $originalImage = $path . $fileName;

            $news->image = $originalImage;
        }


        $news->title = $request->title;
        $news->body = $request->body;
        $news->tag = $request->tag;
        $news->category_id = $request->category_id;

        $news->update();

        return redirect()->route('news.index')->with('success-update', 'The resource was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $this->deleteFolder($news);

        $news->delete();

        return redirect()->route('news.index')->with('success-delete', 'The resource was deleted!');
    }

    public function deleteFolder($news)
    {
        if($news->image){
            $folder = explode('/', $news->image);

            if($folder[2] != 'news-seeder'){
                \File::deleteDirectory($folder[0] . '/' . $folder[1] . '/' . $folder[2]);
            }
        }
    }
}
