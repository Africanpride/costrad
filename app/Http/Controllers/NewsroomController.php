<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsroomRequest;
use App\Http\Requests\UpdateNewsroomRequest;
use App\Models\Category;
use App\Models\Newsroom;

class NewsroomController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $news = Newsroom::with('author')->orderBy('created_at', 'DESC')->paginate(8);
        $newsroom = Newsroom::paginate(5);

        return view('admin.newsroom.index', compact('newsroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.newsroom.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsroomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsroomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsroom  $newsroom
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
            // returns institute according to slug on the front-end
            $news = Newsroom::where('slug', $slug)->firstOrFail();
            $latestNews = Newsroom::orderBy('created_at', 'desc')->where('id', '!=', $news->id)->take(3)->get();
            return view('news.show', compact('news', 'latestNews'));
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsroom  $newsroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsroom $newsroom)
    {
            $categories = Category::all();
            return view('admin.newsroom.edit', compact('newsroom', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsroomRequest  $request
     * @param  \App\Models\Newsroom  $newsroom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsroomRequest $request, Newsroom $newsroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsroom  $newsroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsroom $newsroom)
    {
        //
    }
}
